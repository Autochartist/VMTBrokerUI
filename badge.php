<?php

include_once dirname(__FILE__) . '/' . 'phpgen_settings.php';
include_once dirname(__FILE__) . '/' . 'helper.php';

$dbParams = GetGlobalConnectionOptions();

function getBrokerByBadgeGuid($guid, &$row)
{
    global $dbParams;

    $connection = dbConnect($dbParams['server'], $dbParams['database'], $dbParams['port'], $dbParams['username'], $dbParams['password']);
    try {
        $sql = "select name, badgeguid, badgereferralurl, badgelogourl, badgelastcheck, badgeexpire, badgetradeschecked, badgetype from tbl_broker where badgeguid = '".trim($guid)."'";
        dbQueryOneRow($connection, $sql, $row);
        if(empty($row)) {
            return false;
        }
    } finally {
        dbDisconnect($connection);
    }
    return true;
}

$badgelogourl = "NONE";
$type = "NONE";
$status = "EXPIRED";
$guid = $_GET['guid'];
$lang = 'en';
if(isset($_GET['lang']))
{
    $lang = $_GET['lang'];
}


$broker = [];
if(getBrokerByBadgeGuid($guid, $broker)) {
    $badgelogourl = $broker['badgelogourl'];
    if(($broker['badgetype'] == 'FINACOM_APPROVED') || ($broker['badgetype'] == 'FINACOM_VERIFIED')) {
        if(isset($broker['badgeexpire'])) {
            $expire = strtotime($broker['badgeexpire']);
            $now = time();
            if($expire >= $now) {
                $type = $broker['badgetype'];
                $badgelastcheck = strtotime($broker['badgelastcheck']);
                $badgeexpire = $broker['badgeexpire'];
                $status = "OK";
            }
            else 
            {
                $status = "EXPIRED";
            }
        } 
        else 
        {
            $status = "EXPIRED";
        }
    }
    else 
    {
        $status = "INVALID_BROKER";
    }
}
else
{
    $status = "INVALID_BROKER";
}

$title_str = 'VerifyMyTrade Execution Certification';
$unknownbroker_str = "Unknown Broker";
$websitenotsuppoerted_str = "This website is not supported";
$badgeexpired_str = 'This brokers badge is NOT up to date';
$approved_str = 'This broker is an Approved Member of the Financial Commission. <a href="https://financialcommission.org/check-your-broker/">Click here</a> to check their membership status.';
$verified_str = 'This broker is a Verified Broker of the Financial Commission. <a href="https://financialcommission.org/check-your-broker/">Click here</a> to check their membership status.';
$footer_str = 'For information on our audit procedures, please <a href="https://www.verifymytrade.com/traders/#whatwedo">click here</a>.<p> Our <a href="https://www.verifymytrade.com/terms-of-service/">terms of service</a> and <a href="https://www.verifymytrade.com/privacy-policy/">privacy policy';
$success_str = 'VerifyMyTrade audited a sample of 5,000 order executions from this broker in accordance with generally accepted auditing standards on {badgelastcheck} The results of the audit pass the standards for execution quality as defined by VerifyMyTrade.';

if($lang == 'ru')
{
    $title_str = 'VerifyMyTrade сертификация брокера';
    $unknownbroker_str = "Брокер не найден";
    $websitenotsuppoerted_str = "Этот вебсайт не поддерживается";
    $badgeexpired_str = 'Верификация брокера истекла';
    $approved_str = 'Данный брокер является Членом Финансовой Комиссии. <a href="https://financialcommission.org/check-your-broker/">Нажмите здесь</a>, чтобы проверить статус членства.';
    $verified_str = 'Данный брокер является Верифицированным Брокером в Финансовой Комиссии. <a href="https://financialcommission.org/check-your-broker/">Нажмите здесь</a>, чтобы проверить статус членства.';
    $footer_str = '<a href="https://www.verifymytrade.com/traders/#whatwedo">Описание метода аудита</a> исполнения торговых ордеров брокеров.<p> Наши <a href="https://www.verifymytrade.com/terms-of-service/">условия использования</a> и <a href="https://www.verifymytrade.com/privacy-policy/">политика конфиденциальности</a>';
    $success_str = 'VerifyMyTrade провела аудит 5,000 ордеров данного брокера согласно общепринятым стандартам аудита исполнения ордеров {badgelastcheck}. Результаты аудита удовлетворяют нормы качества исполнения ордеров VerifyMyTrade.';
}

?>

<!DOCTYPE HTML>
<html xmlns:th="http://www.thymeleaf.org">
<head>
    <title><?php echo $title_str ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
<body>
<div>
    <div class="center-block container">
        <div class="col-md-12 center-block">
            <?php
                if($type != "NONE") {
                    echo '<div class="text-center"><img src="/brokerui/components/assets/img/vmt_finacom_logo.png"/></div>';
                }
            ?>
        </div>
        <div>
            <div class="badge-block">
                <div class="row">
                    <div class="col-md-12 center-block">
                        <?php
                            if($status == "INVALID_BROKER") {
                                echo '<div class="alert alert-danger"><p>'.$unknownbroker_str.'</p></div>';
                            } else if($status == "WEBSITE_NOT_SUPPORTED") {
                                echo '<div class="alert alert-danger"><p>'.$websitenotsuppoerted_str.'</p></div>';
                            } else {
                                echo '<div class="text-center" style="padding:10px;"><h3>'.$title_str.'</h3></div>';
                            }
                        ?>
                    </div>
                </div>
                <?php
                    if($status == "OK" || $status == "EXPIRED") {
                        echo '<div class="row">';
                        echo '  <div class="col-md-4 col-sm-6" style="text-align:center">';
                        echo '      <img style="max-width:90%;" src="'.$badgelogourl.'"/>';
                        echo '  </div>';
                        echo '  <div class="col-md-8 col-sm-6">';
                        if($status == "EXPIRED") {
                            echo '      <div><div class="alert alert-warning">'.$badgeexpired_str.'</div></div>';
                        } else {
                            $success_str = str_replace('{badgelastcheck}', date('d M Y', $badgelastcheck), $success_str);
                            echo '      <div><div style="margin: 10px 20px;" class="alert alert-success">'.$success_str.'</div></div>';
                        }
                        echo '  </div>';
                        echo '</div>';
                    }
                ?>
                <?php
                    if($status == "OK" || $status == "EXPIRED") {
                        echo '<div class="row">';
                        echo '  <div class="text-center"><img src="/brokerui/components/assets/img/finacom_logo.png"/></div>';
                        if($type == "FINACOM_APPROVED") {
                            echo '<div class="text-center" style="padding: 10px 20px;">'.$approved_str.'</div>';
                        } else if($type == "FINACOM_VERIFIED") {
                            echo '<div class="text-center" style="padding: 10px 20px;">'.$verified_str.'</div>';
                        }
                        echo '  </div>';
                        echo '</div>';
                    }
                ?>
                <div class="col-md-12 text-center"><?php echo $footer_str ?></a></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

