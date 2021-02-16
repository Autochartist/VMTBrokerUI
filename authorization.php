<?php

include_once dirname(__FILE__) . '/' . 'phpgen_settings.php';
include_once dirname(__FILE__) . '/' . 'components/application.php';
include_once dirname(__FILE__) . '/' . 'components/security/permission_set.php';
include_once dirname(__FILE__) . '/' . 'components/security/user_authentication/table_based_user_authentication.php';
include_once dirname(__FILE__) . '/' . 'components/security/grant_manager/hard_coded_user_grant_manager.php';
include_once dirname(__FILE__) . '/' . 'components/security/table_based_user_manager.php';
include_once dirname(__FILE__) . '/' . 'components/security/user_identity_storage/user_identity_session_storage.php';
include_once dirname(__FILE__) . '/' . 'components/security/recaptcha.php';
include_once dirname(__FILE__) . '/' . 'database_engine/pgsql_engine.php';

$grants = array('guest' => 
        array()
    ,
    'defaultUser' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'burdushkeev1986@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vilakazicm11@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jutarcod@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mtogroup07@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vad85@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'paulwa@outlook.com.au' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jeremy.white2@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ilan@autochartist.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'fjlocksmith@rogers.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'a.galeeva@dataduck.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'a.galeeva@olymptrade.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'd.pu.tamale@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dom-brevno@i.ua' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'paul.warren@outlook.com.au' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jkpj915@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'c1988613@nwytg.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'billware2016@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kaarenenterprises@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wafulaabra@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    '26kolia1985@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'igberetv@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'danieliturralde@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    's.z.y.m.anskiashley5@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'info@verifymytrade.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'myfxreports2@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'giwrgos1337@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'p.johnson1984@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'chandradeny216@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lacdek@thefmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pipsinpounds@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'shmore1969@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'myfxreports@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kellerhoff.jan@googlemail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Krutin989@thefmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'paul@mailatron.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zdrrfn@thefmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ljtsne@thefmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kwdinpips@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pipsindollers@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vincent.f.albert@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mtpymy@thefmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'info@forexrating.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'smcybers@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'andrewokechi@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'anaelsoto7@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'valkocako@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alessandraemax@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vivasilij2@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'budiantoe60@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'blejk7777@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'parsa.support@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cijoy.forex@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'traderfox77@online.de' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wirxx84@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'anatoly.bulanov@financialcommission.org' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'so7.utions@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ol.eg.kim@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tanevonharten@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'olegkim@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'olegki.m@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'autoluxury1@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cadetclifton@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'quest.sg@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'edgarrobertoespinoza@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sakudryavcev@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'predicateit@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm128.m128@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alifarrukh@mail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'anuarnekmas20@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jule-morning@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Romu0246@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'autoluxury@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rajib6127@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'v768121@nwytg.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mrionehuang.seo@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'asyakuzeydeniz1977@mynet.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jez_white@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'o.leg.kim@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'antonio.chaleta@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    's.o7utions@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'oilmaster1978@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'maznosmw@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'popomzz11@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kocely@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jgsaccone@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'edmundo.enrique@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'elmahiyounesa@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lmarques@protonmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mtigran82@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'duykhanh0985652998@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rob@autochartist.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'aldinodp@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'styshnoy@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lukman.salim@live.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hello.zsco@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    '3dzuan@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vmttrader@autochartist.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mdsamy410@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'acharya.kalpesh@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'eosbank88@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lok_stock@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vmtbroker@autochartist.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'agusalhuda95@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alindiatnooaafrica@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'macguyver21@me.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mkgnshn@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mailto.metabotfx@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cocokexin@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'marios_anthis@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kuudhingililwaa@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'albexmail@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'farrukh0309@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'franco@netup.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'itsganatv@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nahian87@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tradomarket16@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Thienchilam4@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wolfmanwallst@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'willyk@webmail.co.za' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'marcos.gmg@hotmail.es' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'asgarvahedi90@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sandilehlabisa3@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sandilehlabisa3@gmial.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mark@baldiviez.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'richdedon01@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'suleimanhassan8877@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'thomaswijaya1981@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lilirizal2013@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sidab212@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rachid.saif.slimani@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'norvalgarebatho@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'minhducn620@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'fadang44@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'spm.1216@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'arupwardi21@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wipfster@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'arayayonas3@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'k1umtelov@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kamranforex@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rann_forex@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'boukhalfahoussem62@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dluffymonky59@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'aumapornsurisuk@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'thailand67@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tsepkovm@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jeremy.white@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'a7md.diesel@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'anhtinhcodon1992@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'j.s.sujan@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'trading.argentad@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hellogioco@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'asidorovster@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Howard.nkuna@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'renato.ruiz@mail.udp.cl' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'factis452006@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'desumsum@msn.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ravikalyanp@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mohmd.khair.awelah@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'frankdancer@sbcglobal.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wirablackphone@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yosvarios@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jorge20bermudez@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'issa1897@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vanthuhytq2504@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vkaski32@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ericknartey69@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'robertgrznar@yandex.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'fm788700@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'masa@dealfx.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'amarkumar.march1997@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'grand4596@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mkhaero@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'retiwari@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'allborisych@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'chkrinakis@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ridethesurf02@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'saneleterrence2@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hood2@me.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pohuy14888@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rob@horton.co.za' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jmuntjan@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'willow13@live.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'marketrhapsody@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'raymartmanuntag01@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'analyn_redulla@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'analynredulla@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'anazilda.2wgh@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wakiku.tundu@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mikki632@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'chagasrosemarie.rc@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'beghieroadrace@yahoo.co.id' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'muziharvey@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lsaid@live.fr' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'femi02rufus@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dimharhcenko@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'djljktq53@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'glbrehuescu@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'aboeydk.dk@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nmuetmicro@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ichimoku63@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yanpopey@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hadad.amin@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'damianlitrading@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tonysydney@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dinsolo38@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lebesasekholome123@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'totati100@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'airidasd75@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ideabreaker@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Metro21pro.ads2@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'guneroc@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wawanyaridwan@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dtme.finance@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'a7832833@nwytg.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jacques.guy68@orange.fr' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'soeyds_12@mailinator.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ohai.shadrach@cargolandng.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adrian.zaharia@chello.at' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'eksan422@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cduxadventure@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kubilay_85_tr@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mirulhusna@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'felicio@hotmail.de' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nhliziyobulunga@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'voanhnhan3010@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'chavorey@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'neoezekield@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ntazanaendlesslove@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'azamishukri@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pauladeyemi.trade@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'linggasangkala86@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tradeone2015@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'danielpolianschi@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'quangthong2405@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'iselemcanthony@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wnjoroge49@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lachlanm@gomarkets.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adrivancamargo@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'johnrichacebes20@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lsteam.iou@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'phamhuyen.260299@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'titsu6789@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ff.twothings@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adebeulah@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'azataga78@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tamryn@autochartist.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'stevej@mailinator.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'brokerdemo1@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tanigbolasegun@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wilfried.marie@icloud.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tobias.tan@starfishfx.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wallace.mec@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ahmedibrahim258258@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'c4956409@nwytg.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'demobroker2@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'demobroker3@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ceo@sfx-markets.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'on2onlinework@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    '0814stanleyflores@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'iyama60@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'opletaev@stforex.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ylivshits@maxiservices.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'emaly@manhattan-massage.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mooredontia@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'racquh@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'oluwasanmijide@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cambizfx@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'qvirus2@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gregorychizuwatheone@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cedriclaz67@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'boromic@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alger.soriano@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'antoinewotto@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sagarpanika1992@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cdinh433@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'asponix.elevator@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mortezamotalebi26@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'michellegpahayahay@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'meysam.shaheri@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kshulkevich@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sidibeissouf@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vassk2687@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ngkarrock@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jamesbondnew.newbond007@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tabunovs@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dimon4ka@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mitchgatila@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gleisebella76@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'siatjung91@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rendraahmad0@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'joyannie1@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ipdipd@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hendiafy@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kartakuw@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'phaetonw12@yandex.by' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vasyl92@live.it' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alowisimohd@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'skudryavtsev.wm@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'asim.khan.387787@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test01@connectedrope.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vasyl921@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cambiz2018@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alowisi@live.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mt.raz.231@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'a92f@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Elostoraabdallah@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vliveshere@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'challys@gmx.de' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'emansulaeman56@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'topdoc@ix.netcom.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mikznteza@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'muppugalla@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Ahmad.shoon.451@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Devanaveen120@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'evectio@yahoo.com.au' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mrsmsnv@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mnby.2011@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'modestaani22@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'investing.ts@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'currensix.trading@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lacksonmlandeli08@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ari.handriyanto54@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ibrahimsubhani@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nurmuxammatx@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tulus.suryono@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'billionsnet@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'illuminate2018t@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sergey10041978@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lemojhesro@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pietsherif1@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'oan19762005@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'supriyatnasyahindra1998@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nkelet08@yahoo.co.uk' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'joshbatubo@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test124@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bernardo.ailton@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'scott.kidder11@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'brad@tolivelong.ca' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ceo@deltafx.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'olayeni2017@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    '79035748769@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adol.m55@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'igorklem777@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'masrois46@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    '61409212@qq.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ujang.pantry25@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jutalaktorwiset@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mhmd.layth@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'viktor78@online.de' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'emohmmad@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'andreysukhinov@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'remon@nomer-ict.nl' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vadim-zhuravlev@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mmriri02@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'paulchilaka03@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'raihan_nu@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ragazonsitchad@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mannys9002@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'shkarupin.vi@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'parsabayat.puza@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'e4sywin@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'reisschristineelizabeth@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'brunobarreiro@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ngovohoanglong856@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mthembu12@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sidikamert44@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'khamkog1979@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    '123qwer321@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'brennan434@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tamogrid@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wahyujatmiko61@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'anh29022984@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hcatarroja4395@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adiratana@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wahyjatmiko61@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kohan_jb161@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'danie.sadistributors@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'afernsuk@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mseharraza1979@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ttommy267@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'plxengana@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jackieechiwaura@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'merita@mail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cfs.theo@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    '5578124@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'info.proresources@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bratany2003@list.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nasiliwet93@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rama.anandhita@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dibalo012496@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sdwyss@bluewin.ch' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mrstraderskpm@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'paulthakhar@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lizveroni@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'psenicinii@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lebedianscky.andrei@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ajayewj@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'invprogram@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'luisvivancomx@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'masud.rana5bibi@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rajendransoman@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Boss.vovka2014@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kenechukwunelson09@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'instrad.ec@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kunrosa@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wy31484@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bule.sea1983@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'luisjherrera@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rauof.rahim@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'markus.hohmann@hispeed.ch' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'oghorabah@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'repnikov.maks@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'evantj83@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'books@haymes.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vvp@29.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nino.foschi@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wy31481@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'a.polyakov1@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bw8606841@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'spillionaire475@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'marcin@madrzak.org' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jjshang@mailinator.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hieu_lacoste1986@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'www.abod@gimel.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'asajrhabodd@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'otis.elma@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jazz1john@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'brownsugar5585@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'amir_reza_johari@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jjshang@abctrade.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mahmoodpoor.r@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'j.penkala@op.pl' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'miroslaw.stankowski2@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vivat234@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ying_lloyd@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'maelfendie73@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'biram34@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'maxerlmax@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'samuel@bigwhale.co' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'azataga78@hotmayl.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'DJBiguza@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'grand606@wp.pl' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jeremy.white3@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tbdwi98@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kadi.diane1990@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bndegwa921@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Newstart842019@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tentenqn19@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ardagurman@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'svod_3@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'magnus.altrichter@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vuthanhtrungvp@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'salimmalik.a786@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kitithatmaxxx1988@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'donjayazz55@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'luninetsm@tut.by' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'etiangcodejesus@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'assis64@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mykmah@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jolatiregun@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'atiker542@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mhjafari1396@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vassiliy@ua.fm' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'CuteSyed12@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sardortanbur@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    '4107977@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'teotonioes@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'maxim101@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'danielgodwin9@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dimondimonoff@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'apelsinzp@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'let970476@gmai.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'let970476@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'heshamfouad506@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gjxnf@tut.by' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'masjoen_dr@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'elija.dimj@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'timka@programist.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'info.faraham@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vexelhost@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mianbabloo1@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'damnednax@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ar@abedrezaey.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jbaker.pa@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'habimohd@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tebellosilas@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'md.satter2380@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'callput2016@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'murakaz@rambler.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'flavio.engenharia04@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'admin@optionfield.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm128m128+tt@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm128m128+yy@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm128m128+ii@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm128m128+aa@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ilan+vmttrader@autochartist.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm1281m28@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm.128.m128@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'SSKOTIANS@GMAIL.COM' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'clem.agaba@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'u2em13@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Ewgen01@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'amerjadid@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'phi86767@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ip66ip@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'salimkasim@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hassan.elgaraihy3@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'agorprofir@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'agorprofit@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lisowaalisa@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sinelnikovoleg727@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bbrown416900@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'olex6699@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'helanianray8@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'meinolf.bauschulte@gmx.de' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mahmoodbasit48@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'konstantin.gmyzin@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'server806@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mjulian.java@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ta.trading@telia.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yet2007@hotmsil.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'aa.ahmed.ali@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mustafazia1@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm128m.1.2.8@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kocely@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'iazbel@mdio.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nguyenhuyenicloud95@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'chicare17@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ahmadsendia@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nick.ssoares@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'basderzxc@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bdodd9097@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vanbka1104@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'febr68@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zelomefarmer32@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yet2007@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'beechawala@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'maqsood.mrmade@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'omar.maatouk@amanacapital.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'barnarg70@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'moslemarbabi91@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rinkyy94@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'canadahouserussia@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'chichchenho@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'phanudestsomlourn@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sean.moseby@virginmedia.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ziplock.block.clock@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ahmadrazimohammad8@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nguyenmelinh92@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'habibfarasat@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm128m128@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'DemoBroker@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sekhokhotumelo@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Ivan.hard88@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'francescoalbanese1212@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'malikfarooq22550@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'i7hornet@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'surabayaviptrans@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sasa1993@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'montana@andorra.ad' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mariajamaica888@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'shedonyii@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tananabbn@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zhernakov211085@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nguyenmymy1995h@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ebeneza.mokgadi@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'taras.kyschkanyk@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jessetoo47@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alharrif@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'songdji@yahoo.co.id' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tomsiya5@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'edwinoorkartaatmaja@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lparulis@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'D0945876646@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lovery77511@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lehoanglang1@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'phuc160816@gmal.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zhrkerok@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'shahzee12@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lytrucly1@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nanoooozzzz69@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'srimanthrao.r@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'damariyanrury@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'crinanatasa@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'skzakeer16@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'artemtikhon.87@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'margo.skripkina@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ajithpre462@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dictsoni5588@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'master_2014@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tybeostore184@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dionusos@otenet.gr' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'shuaibi@live.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'revizorkru@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'franciscovillalobos404@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'fxtrade.hani@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mchikunyana@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sonikhun410@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rustamtaziev@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'guotanh88@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm13800@qq.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'makivant@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nazzy.md@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sardor4009@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vj9g@yandex.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gks.binary@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nhohaycuoi9x003@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wemi@dewara.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lhpstocktrade@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Ariel.frutos.123@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mcox1@talktalk.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'marinelrosu4@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mzackicamri@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jakubrehak@atlas.cz' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tanaput.titaut2526@gmail' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'samewo@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'asad0095@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yayosong.yaimai1883@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'terryvanaverbeke@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Koshkarovpavel@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'balong5757@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'davidoyig07@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'originalkamjaguar@bk.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mr.mohamad1999@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'angelnona094@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'swapon421@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'forexsession@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ngolong222221@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'knightkiller.azure@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'thientuan240786@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gacon46078@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'camonel_65@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm.marsigliese1984@libero.it' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wakidsyai@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'csorianomn@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Gerry.schiller@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dungneon67@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'trungnguyen.noithat999@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'paulus.kei@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zunguhm@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alsokolov.1961@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sergales3@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'qadirbakshchandio@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ovk969@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ab_forex@libero.it' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'asepcalo14@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bobudan24@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'smda9981@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hostartgaetano@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'aramfido.1994@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'truegear2017@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'carrentutti@gmail' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sucker77pro@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'aminefx12@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kiwihal@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'devsalesforce@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'aleksei.ivanovich77@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sam871992@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'boerse@trissler.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ossama_aly@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mjmokobi@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jamp.vj@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'aleksandrromanov8@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'comunidadesfsp@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tonysutrisno@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mehrab.zandi@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jeangastienkwimangfouby@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'michalaadamec@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'isabilillah@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'finaacca@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'primteb@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'billhelou@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pyrigsergio@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bainasko@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'marendradevi2@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ahmadmonem@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'eduardo_caldas@icloud.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'itandtrade@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gbmemo@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nurdin518@ymail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adoola2010@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'koramama9@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jatisukma9@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'suyanto322.wa@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wellmath@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test89@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sv12.stoycheva@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'oleg76spb.srt@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'matjekamb@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tati_812002@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'relax@clearlight-saunas.com.au' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bryd2404@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'juliuspermana@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'czehmeiszter.j@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nateclass@univtech.ac.za' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'afternaftr@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'firs62@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Denkom@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'goldetective1@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'carlosaraujo627@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mubeendogar944@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lequytoan44138@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vlitov49@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'levlad2@inbox.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'luckykambowo@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'info@vomconstruct.be' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sudhir.sinha@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ahmed.mwidani97@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cutiemukwevho@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'aleksey2304811@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nelyerisbotello17@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jocornerstone2013@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'endro07@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nik.cnt@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'milos@smerda.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'damir.lamza@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'k.lot69@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'didine2mahboul@yahoo.fr' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'keith-pereira@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tafo_16_7@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'j.kameneckas@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ardurrani@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'muhamed.oka@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ecochem@mclink.it' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ahmedhammad405@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'treider.smolensk@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'egoisthomo@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nttam.277@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'opheliar37@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nordva@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'martinwatheka14@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'angelgevanny@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ahmedsamiramin@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vl_sergeev@list.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'osamanps@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'minnierethabile@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jomfx123@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'd.ranto@yahoo.co.id' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gcrivellih@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'testNew41@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zeidsm@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rue009.outlook@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jlopes68@ymail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'boypaule@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'taerqbraim@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kristal_namiq@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gagusting@yahoo.es' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alexeyev.o@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alex_www@bk.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'carlospetri80@web.de' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adventureyki@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bukhorijoss@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jacquesbicca1@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adel.shaker@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sobolev_ivan@list.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ARCHIE@HOTMAIL.RS' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ilsor59@msn.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'senakaab@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tnyamwanza@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'a.khvorostov@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zaidie@outloook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    '2mc@live.com.ar' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hisham-mousa@windowslive.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kencringan@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'eidan.alasmari@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gholamrezakoolivand56@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'futfortrader@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'stari4ekDevis@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'verafx@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'davide.mori@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bandiw25@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'randyfordvan@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ivliev@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'livestonejobs@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vovan631987@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'khosravisohrab@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'filvitek@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hakki.gulsen@mynet.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'asmamulla51@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zulhilmi.adnan.28@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'qbthanh@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'arasakultoyib@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'raouldecasa@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hntduy1992@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kim@sortvik.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'catharhina@libero.it' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'waell5@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'q8fawazq8@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kazantchouk@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'filigrif@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'seomail@post.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ejvind.pedersen@connection2denmark.dk' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jherimaulana@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pak.are.free@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'silvioroberto2009@globo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bajma@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kevinstanley@sky.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'intimail13@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'semargl144@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mr.grand-europe@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lipe.gmattos@yahoo.com.br' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ufa161287@rambler.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'amrane0787@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kyaloalbert@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tradehub88@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'warleymariano22@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tehnikaelektronik@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tjoma-muravkin@rambler.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cleanbioenergy@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Skrejg@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ret1974.ivanov@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dan_okere@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'andrejsstrupits@inbox.lv' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lilis1261@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kayprince1@yahoo.co.uk' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'centramgt.ibras@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'daneddu@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'big.boniek77@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'johansabin@yahoo.fr' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm.samateh360@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hithost@list.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'stefanov1973@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lusandantoni04@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rizal.alkuja@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nataliia.kuchmai@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'koksymaglo@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bunas74@tut.by' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'elagin_oleg13@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'azathalmaz@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'samirahqutub@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gafurova.evgeniya@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'marckow.vol@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bonlife17@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'javaven2002@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tarjeikr@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'johnferns456@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'talptekin@hotmail.com.tr' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'statibot@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tarek.bright@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'richardfrost25@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test42@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'joshua.hamlet@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mr.atifali05@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wajhi_malik@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nahrowi887@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pradeepsjv@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'thorusnuevoamanecer@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'moorecapitalinvestments@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jyrivaarmets@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mytreasurelife@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Andyatf@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'julyzep@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vadim46b@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'merkaya20@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dim271278@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'houcine.a.caid@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cjestebanez@hotmail.es' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mr.SergeyVB@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'anselmo1956@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'haithem.kamal@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yes.richard@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ahmed_elseby@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'asm80@bk.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wahyumagelang24@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dladlasazi@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'portiadahwa86@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mustafabey75@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tanyavm@abv.bg' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'heruchintia@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ashrafsaber@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'agungjayakrisna@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Rahal.UAE@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'neefwSwepaklyScathetuh@halemail.bid' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sbeavis@mac.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ram22222@bk.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ammarmeza@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hvzzn@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'uberemako@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hr.setiawan@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'iefuzzer@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bastianpschmidt@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ftnobre@yahoo.com.br' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vicsandel_bina@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'agbeje37@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Hemty@msn.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'irinakiev12345@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vanioc89@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'malidus.reinhard@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'asad.tajir@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'khechoyan_gevorg@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'MSpaniard@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nwachukwuhope33@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'LMOUACIWALYD@GMAIL.COM' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'olimp270808@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'michael.m.mccormack@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adverthere@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jonkokanchev2@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'd.yeleuov@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ucjd@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'domini@live.com.pt' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sermus.alex@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jkingccis@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vova_petrov.18@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'isdjas@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'h.okopna@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'unlockmenow2014@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'travolta.72@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'goezblezat@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm.baranyi@freemail.hu' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Timmille82@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'remialuko2007@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kokkong2324@yahoo.com.sg' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rachidechcherrate@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ilya_dementev_00@inbox.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mityagin2301@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Gena___74@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'viano02@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'keithkriver@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'demo_swissquote@verifymytrade.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dennybochmann@aol.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gerhart.huemer@hue-mer.eu' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'atef.abdelhadi71@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mjankwi@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hirchmony@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kozak_sf@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'waynegajadhar@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'benezim7@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'valerijsablin55@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'blacksymbol@list.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'forster.peter@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'denkoolagin@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'esennura@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vadim.dobroskok@faceit.com.ua' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'fidalis@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ervir.lalaj@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'testing@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'batholekopa@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'chambemichaelt@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'andyteros05@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'paul@autochartist.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jhonwong007@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'happymusa@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'r_samit@yahoo.co.in' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mytrade@mailinator.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'aircrimp@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'badruade5@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'schmidtsamuel97@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mmoloki03@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'abdellahelfassi133@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'info@mbgestion.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'abduo.dj@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nurdinghifary@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'matwei42@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bbtt181@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'carloswceron@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nechyporuk.a@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test6@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'baasithsyifaa@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jeremy.white5@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jeremy.white7@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vd1@mailinator.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lieliek2205@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test9@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'banggaru23@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mslmanmohed@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bogatsup40@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'a.okadu@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Alireexport@Gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sfjjvg@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'costyayakovlev24@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'andrey.nikitin.86@bk.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ensar.guengoer@me.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'edneijorge@ymail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'info@nkitseng.co.za' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'comfortotenewaa@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'marcusleme@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'samuelotegbayo1@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tolkunov1960@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'osmo5929@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Kemuning135@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'basara54p@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'thwalaxb@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'budipartyx08@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'a.mahmoud.a@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cotenko.aleck@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vinogradstr2@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'grinkivmisa16@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ciugulea.tudorel@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'raphaelbayang@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hamed20m@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mfarazfard@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ferdy.ari@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'imyani77713@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Vikramat@hotmail.co.nz' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'taivan-83@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rafiek77@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Ifr.creative@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'halanski81@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'firebolt17@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pazguy@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'parthgohel05@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'q.good@rambler.r' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'i.s.modaresi@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'crack3411@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'thanasis.sianos@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test41mess@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'moh23540@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dowdow2020@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'katrinmelody@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Antar100@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'indrabayuprasetyafbs@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mixail65@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'akurosaki65@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'igarunia@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'igor_200875@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'segrud@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mekahveci@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adejohh@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'khaleelope@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    '6silvio9@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'konst.popov2026@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mario.camachos@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'impexsheikh@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'andrey19862012@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'battalgzsari@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'poniran1979@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'petuhovm995@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tadyjunior21@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'leha-veter@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Taqim.qurthuby@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Chidieberemmerioma@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'fabulousmanniomr@live.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vd3@mailinator.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'waleed.hussam995@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'janek@formax.ee' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'trojan-v@inbox.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'taatpribadi85@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'farokh.firoozi.66@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'niko21977@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'anuarnekmas@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jlekwot@gmx.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ndzolongqov@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'indrifi3yanti@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lksjjpnmarjov@rambler.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'franklopes0777@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sebastian.est11@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yuriko333333@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tpdinfx@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ayman.maarouf@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'leon2020@live.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'truongkimphuc0209@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'altay.muslim99@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'karunaaleks@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yuritzmc@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gsbeetar@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'shaileshcrane@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'railiaquat111@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lunlady83@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'khamisco55@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'draganroskar@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sinhkhongcon@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pudjiantopo2@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ngheoroo1982@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jagopayfx@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'idpinet@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ahmadmusavi952@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'danghai1990@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'marthofer5@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'georeto90@abv.bg' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rita.ariella@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bigatizf@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rebecasantelli@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ddeniz_3478@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'grishakov.p@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hadiacc.17@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'as.0656042108@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'fonseca_nuno@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'shienjin@bi-xi.cn' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mercymwitwa64@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'danglongduy123@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'olidoblessing@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'malmokoena@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'trp.tc5335@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'datbackodoithu@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'goyaloilmill@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'khoimihh73@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cw.jones.j09@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dream_interactive@yahoo.co.uk' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'peopletrade@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'balakishorema@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm_tan76@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hoangnguyen19913110@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'i79252218960@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'unfinishedrhapsody@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'p0652260909@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'avv.geo@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adejobiadewale62@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mubuwetav@mail-point.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'viwogovu@cloud-mail.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'geokpheng@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'egdp60@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'posman80@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'l0ngd4ik4@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'brush196714@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rsonib@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'md.asatter44@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'almutair4040@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sabri.loverhot@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'qwe1asd1zxc@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'richardaewood@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vifne@yahoo.es' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ggilvanei1@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'GoharLKhilji@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kohalmiz@gmx.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lourdesempuesto636@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'juicy1728@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'snigga08@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lichrun@163.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    's0595309930@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mrlionfx@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lempuesto23@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'msh292@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vlatch@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'natuproph@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rmpakki@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'phanmanh951993@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bayusmartghetto@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rmanikandhan@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test5@verifymytrade.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adiel20calix@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'khuongngoc0640@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'arichebaya@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'eliberto.santana@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jafarheydari552@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jafarheydari552@gmail.comj' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mzarimi@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vantrong11111vn@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mohammadfarari1360@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'samtrinston@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test77@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vdd@mailinator.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'juhari.akbar@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vd2@mailinator.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'oleksiy.ivanov@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alephbaabc@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jeanmichelle1976@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    't.yusupk@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ssoru@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'airalex@hotmail.de' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'serzh-piter@inbox.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'akteryasmin557@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'baseerazimi056@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'michal.pazura.80@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'parastoo52ph@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kobus@autochartist.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sergeyn@tradefred.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'qwe1asd1zxc@exist.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dmitriyvladimer@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'herbaman24mx@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'progma137@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'piranha34doc@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'varadas108@ya.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hrenfx@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mdmlkdjeer_1540849085@tfbnw.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'denis_dronov90@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dgeetha175@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zink.my@mail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'felix.kurilov@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'keb.tema@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'samme59@yahoo.ca' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wesana4321@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'naidinpasha@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'stupidessay@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'appletrixie30@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'thanh874tn@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'finlaytate13@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'fortune9829@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'salmaan8979218387@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vbruzhina@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'oessam@rocketmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ibrarkhalil007@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mkmoleg@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ramirolopez883@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'robo59fx@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zamasgoal@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'eugene.novik@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dannyy0000@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jamaxiboy@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'halit@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'takeprofit.ltd@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pr.denis.klimov@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cometrader8345@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mhd.sayydulsanjaya@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ali.srsr90009@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'brilev.sania@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'masterahammed@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'arunamishra613@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zulqarnainanjum17@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vuongnet1994@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'profit.fxlois@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'apelsinzp@meta.ua' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'karunrathi3@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rooh2047@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bitokkiprono@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'caninwe2@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nt694508@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'obiora.aninyei@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adisbwid@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kashemnur387@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'derman4001@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'douglas.reith@pepperstone.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'himmatseva1@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ladikemi@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jobalekside@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rehobothgeorge@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'abubakar15@outlook.co.id' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'neale.fy@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jubairhukum.62@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jubairbaharuddin53@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ckwoh@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'miasmisshuan@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'duc021755@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'neluvelg@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'forex1binary@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'eurusdusdeur@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nail.sibra@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Binkapponmwashetur@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'shandysoesanto3@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'waa98988@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'skalik67@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'arifputra1987@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'o.voitova@nbrb.by' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adang.g.mugara@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'eryana982@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'katlegomokota2@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'natsikape@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kamjiraaboonnam27@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ebayins29@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test_large@verifymytrade.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jurijkn@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jhanmamasalagat722@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Ismoil.rasulov.1997@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vdo5@mailinator.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kap_69@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'williamwambugu28@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ramsudhs@yahoo.co.za' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'joymariemallillin@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'iblackjaguar@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'joymariemallillin33@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'joymariemallillin33@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'denishorvat.slo@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'k_saad_g@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dothanhtung.0992@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'erikozeee@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hamdoun10@outlook.sa' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'muhammadasadjaved1234@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nolan.duval@techie.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wesleykips@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'slkramer72@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sergiopapas11@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mulyanasaep@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ballhysakreshnik@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ivonotbad@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jerryherry36@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'skalozub67@ukr.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'eny.tronic@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'luckytips@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'michaelpratt68@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kaza2217@ymail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'enoxl@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alexkury@inbox.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'abuhfdh@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'osha1@rambler.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yury.sniper65@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'shareefsialpk@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'anuzbright5151@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jan.schuurman4@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ddfghjpp@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'qqww43889@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test_large@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dsm982@rambler.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'davisalmeid@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vd5@mailinator.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kaosenwan@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'k.b.setlhare@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'swgtradingco@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ferrypradanna@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'widododuwiono@yahoo.co.id' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'getref.555@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'muthiaasriva@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'c123389@nwytg.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'johnbakugan10@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mr.serz.75@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kberichon@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rainanekagrosir@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wahyuni.rizky.101014@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test_new44@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jgillespiejr@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rishat88@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'williamsminini5@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mike.herriot@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hairo218mine@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jennifertonga53@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'koko@ethersportz.info' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'trangly665@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nks5021@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ruska128@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'juanmcayabyab@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rajkafx@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'anggarizkia86@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'belbase.manoj@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'urb.kaddouri@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'g.janoudy@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mkholongo@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    '45acpmm@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'binaryoption.vk@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kabugag@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mpagano@hotmail.it' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pedrojaimerodriguez@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'backer.seyam@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'snatur999@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kcsman8@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'eminemkionna@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rostagyula@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mosamashele1@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jerinjsn@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'david.shammah.a.p@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'farrukh0309@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mafamalataliana@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zandokan281058@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'renanzforex@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wilymu@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yahyaalnaami@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ultratrader72@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'phgafoor@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'motimeng@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nvkhoivt@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Didalelwa1987@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bergamo75@yahoo.it' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'claudioalgieri@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'prodtest@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sabina.osyanju@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mohaiken6@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm.abbasi11@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'afnurgaliev@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vv2@mailinator.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sergeyonenko@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'saravuth@outlook.com.au' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ahmedlotfy662@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lsergey70@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ludmila022@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ayman.tawil@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jvvz@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'german.agra10@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Telish142857@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'aldo.sarracino@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Suwiji.sugianto@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jen.mari@yahoo.ie' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'givrebler@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'joseph.marzbani@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm719salon@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hanzaleh.a.n@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'stcmus3@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'm719nailsalon@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'brupet2003@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'iwiyisi2002@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'imrunga@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'etihgroz@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bbenetatos@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vasyaya60@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'oleg03081988@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'saltuksenkop@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'daencaba@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jaan.liiv@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'minimalistconcepts@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'andrew.housedjs@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nincheousanliti@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alessio@failla.co.uk' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'skendel@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'katsmi@hol.gr' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'alejo.haad@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'younesberthe@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'temooralam@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'febrieko.saifudin@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'demo_avatrade@verifymytrade.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vdolgov@indigosoft.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ajdl77@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mudit.misra30@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'claudenilsonvirgilio@yahoo.com.br' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'madacky@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sdjamaleddine2015@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'david.alejandro.esparza.22@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'd_t.y.s@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jmachado_nic@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cunhalm@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'villalbacristian775@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'evgenijvolosin994@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'waleed_elsharif@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'AlXXX1705@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rome.selekoe@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'martor.dignos@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'melahat.deda@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'talip06duran@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'comincio_scelza@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jonathan.maphanga@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'erinsonvillarroel@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cstoica06@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vitaliscezeilo@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'priyanaveein@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yeddohs@yahoo.fr' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wikisafi@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'marklewis049@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'danny.gawande@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ahmedyehia1997@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'chrisbulloch@live.com.au' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'asdrubalcardona@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ydarmoni@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yamin2000@GMAIL.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'syedcomm@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'don@broadbeachinvestments.com.au' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jonmitchell2000@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'anto13642@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ticastigo@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sarifalamni@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bogdan.dima74@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'cb_83@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tombath@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'austinofx@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'daniele780@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'darias40141@yahoo.co.id' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'noma1003@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mohammad.syafri.w@gamil.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'andreypohelyuk@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jasonblissett7@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'fanglas@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'xena074@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'donete@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jaza138@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yousefghazal68@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hammoud_k@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'olwethu.installation@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'donizetti.martins@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'clctrader@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Robinkc6@kpnmail.nl' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'napewnoniepsy2@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mabonaa@icloud.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'oleg.danilov.1984@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'remi.ba@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'medyouch@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pmn7612@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'diamondco.doo@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ban.1396@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lex7k@ukr.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'erwin1608@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'frank.squire@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rhfckfu@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Jasam18@yahoo.es' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'setiyomargono@yahoo.co.id' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'psandov@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jakopovicdamirjd@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'fabiocherubini10@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'assadazam@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rangika_14@live.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mixomabasa@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'franfxup@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'folklarry@sbcglobal.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'batuakik050@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'fisnik-96@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lovalova69@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Adeniyiabraham0@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vaskin1195@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'taedon82@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yusuf_55_c@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'turguy.muharrem@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pauloedub@icloud.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sniffski@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'chrisg@gomarkets.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dmkov77@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'chijiokehenry16@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'iksanjanuardi@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'modul.br31@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mmrahim@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'brainlovesheart@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kbaptiste.kb@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gognadze82@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'montrichunpho@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'raul@cruzmunoz.es' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jasame18@yahoo.es' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jorgegranadaforex@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zoran.jakovljevic@telekom.rs' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rtspurvi@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hkhoory1@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'deripasco@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nnajihod2000@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'grigoriymolkin@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gbrygel@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'andryushenka.vasilev.1974@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'stymtc@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'signalsfx7@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'a7mad-fx@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jmhopkins_plymouth@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tmauri@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'paoloamenta@icloud.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'garayar@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rizarohman88@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ditthipadma@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'oshmd@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'drustiawan66@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'harold.md@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'forexotti@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'poddielskii79@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dadangrustiawan1@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yusmizan80@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'aliahmad32365@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Maliksalmanali52@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dsdslavov955@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dcloete223@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tommy24gustama@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jonimar1900@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kivandanu@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'theo.laksana99@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ssa.mhd@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hendrotpi@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bsl-18@yandex.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mohammed.tayser94@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kaduadu@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hendraputratito@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'olatoye.stephen@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pixeluon@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dmandere82@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'narnos04@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gmphomatumba@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mercyvillaplaza@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sergo58@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adiemzs@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'canaveral@bk.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'atc.traderfx@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'otmanbarbaro@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dsuri@telus.net' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sndycouple@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'prinsjosua5@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ra_diansyah@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jaibelzea@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wayne.cawood@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Mixail.stadnik.80@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'valley.cjc@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vusim1788@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'danatarovserdar@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'eirsyad81@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'patmut102@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mrgolubev@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'marsha.madzhie@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'blagowalery@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'miibra2000@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mandengui@outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'virgis.stalgenai@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'zulct2001@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'munttari2000@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'therealforextrader@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'adetyinka@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'stevekandio@yahoo.co.id' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nemis284@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'fxardi@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dori.tegal@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'budi.pertama@yahoo.co.id' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'abdulshaheedabdul@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nikolai.surkov@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Grommi.88@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rajaram.muruganantham@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'apparel.my@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'saidmukhlis72@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'almubarok140915@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'allatiframadhani.said@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'puma140@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'arry11utama@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'perlob@gmx.at' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'arman.pda@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'wladimir.prado@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'muzaffartoj@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'exsnowhound@Outlook.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'antonov.cemka@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'gia11978@mail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'phuongvupc@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ndzolongqovu@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'bekok1968@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mic.isaacs@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nvi_68@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'andreipopov182@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ferdinandaja@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Naufalzakariyya@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yoyokjkt83@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nadnnad12@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'thomad.ariston@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lbonilla0471@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sunmolago@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'benisonalvarez@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dominic.dalo@bigpond.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'serikzsn@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'hiposmart@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'smartherry69@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'thomas.ariston@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pronitsyn@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Lettlevin@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'omarego@yahoo.es' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'essawe@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'aminenadiri@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    '007xzx@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'kadiri20end@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ennarjess@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'Yvette@autochartist.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pearltravelalex@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rohmantototo8@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'buxip@bk.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'braim.supi@yahoo.com.my' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pav@vip.bg' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'david_massaez@yahoo.es' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ismail.negara@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jandroanghy@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'convallemarco@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pkostyukov@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'evgenikoval10@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'artemka45@rambler.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'antpush3@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nnolt22@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'fmlbfx@finanacier.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'lenniks@bk.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dion_dallas@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'stargazer18121969@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'axel@delfi.lt' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'got2@wp.pl' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'musik.ok@mail.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'rosatialessandro83@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'nikola.duic@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jquack4581@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test5@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'pay-bank@bk.ru' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mesutocak@hotmail.de' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'evtyukova@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'husainihuss00@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'sudesh.wasm@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'okome.majemite@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test7@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ahmad80@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tradea697@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ajayca9@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'guerini.domenico@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'romanzevnik@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dubejabulani16@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'dobrenkij74@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'ass.prihatin@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'vlytvynenko@i.ua' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'yaser_musa2003@yahoo.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'patihmada07@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jvinlim@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'test78@seertrading.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'farshidtapesh16@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'imran_sthlm@hotmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'tino.funk@yahoo.de' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mendoncapraveena2@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'jcmorales0103@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    '90tabcon@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'oldanfil@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    ,
    'mirzaeimostafa74@gmail.com' => 
        array('execution_per_type' => new PermissionSet(false, false, false, false),
        'execution_per_hod' => new PermissionSet(false, false, false, false),
        'execution_per_symbol' => new PermissionSet(false, false, false, false))
    );

$appGrants = array('guest' => new PermissionSet(false, false, false, false),
    'defaultUser' => new PermissionSet(true, false, false, false),
    'burdushkeev1986@mail.ru' => new PermissionSet(false, false, false, false),
    'vilakazicm11@gmail.com' => new PermissionSet(false, false, false, false),
    'jutarcod@gmail.com' => new PermissionSet(false, false, false, false),
    'mtogroup07@gmail.com' => new PermissionSet(false, false, false, false),
    'vad85@mail.ru' => new PermissionSet(false, false, false, false),
    'paulwa@outlook.com.au' => new PermissionSet(false, false, false, false),
    'jeremy.white2@seertrading.com' => new PermissionSet(false, false, false, false),
    'ilan@autochartist.com' => new AdminPermissionSet(),
    'fjlocksmith@rogers.com' => new PermissionSet(false, false, false, false),
    'a.galeeva@dataduck.com' => new PermissionSet(false, false, false, false),
    'a.galeeva@olymptrade.com' => new PermissionSet(false, false, false, false),
    'd.pu.tamale@gmail.com' => new PermissionSet(false, false, false, false),
    'dom-brevno@i.ua' => new PermissionSet(false, false, false, false),
    'paul.warren@outlook.com.au' => new PermissionSet(false, false, false, false),
    'jkpj915@gmail.com' => new PermissionSet(false, false, false, false),
    'c1988613@nwytg.net' => new PermissionSet(false, false, false, false),
    'billware2016@gmail.com' => new PermissionSet(false, false, false, false),
    'kaarenenterprises@gmail.com' => new PermissionSet(false, false, false, false),
    'wafulaabra@gmail.com' => new PermissionSet(false, false, false, false),
    '26kolia1985@gmail.com' => new PermissionSet(false, false, false, false),
    'igberetv@gmail.com' => new PermissionSet(false, false, false, false),
    'danieliturralde@yahoo.com' => new PermissionSet(false, false, false, false),
    's.z.y.m.anskiashley5@gmail.com' => new PermissionSet(false, false, false, false),
    'info@verifymytrade.com' => new PermissionSet(false, false, false, false),
    'myfxreports2@gmail.com' => new PermissionSet(false, false, false, false),
    'giwrgos1337@outlook.com' => new PermissionSet(false, false, false, false),
    'p.johnson1984@gmail.com' => new PermissionSet(false, false, false, false),
    'chandradeny216@gmail.com' => new PermissionSet(false, false, false, false),
    'lacdek@thefmail.com' => new PermissionSet(false, false, false, false),
    'pipsinpounds@gmail.com' => new PermissionSet(false, false, false, false),
    'shmore1969@gmail.com' => new PermissionSet(false, false, false, false),
    'myfxreports@gmail.com' => new PermissionSet(false, false, false, false),
    'kellerhoff.jan@googlemail.com' => new PermissionSet(false, false, false, false),
    'Krutin989@thefmail.com' => new PermissionSet(false, false, false, false),
    'paul@mailatron.net' => new PermissionSet(false, false, false, false),
    'zdrrfn@thefmail.com' => new PermissionSet(false, false, false, false),
    'ljtsne@thefmail.com' => new PermissionSet(false, false, false, false),
    'kwdinpips@gmail.com' => new PermissionSet(false, false, false, false),
    'pipsindollers@gmail.com' => new PermissionSet(false, false, false, false),
    'vincent.f.albert@gmail.com' => new PermissionSet(false, false, false, false),
    'mtpymy@thefmail.com' => new PermissionSet(false, false, false, false),
    'info@forexrating.com' => new PermissionSet(false, false, false, false),
    'smcybers@gmail.com' => new PermissionSet(false, false, false, false),
    'andrewokechi@yahoo.com' => new PermissionSet(false, false, false, false),
    'anaelsoto7@gmail.com' => new PermissionSet(false, false, false, false),
    'valkocako@gmail.com' => new PermissionSet(false, false, false, false),
    'alessandraemax@gmail.com' => new PermissionSet(false, false, false, false),
    'vivasilij2@gmail.com' => new PermissionSet(false, false, false, false),
    'budiantoe60@gmail.com' => new PermissionSet(false, false, false, false),
    'blejk7777@gmail.com' => new PermissionSet(false, false, false, false),
    'parsa.support@gmail.com' => new PermissionSet(false, false, false, false),
    'cijoy.forex@gmail.com' => new PermissionSet(false, false, false, false),
    'traderfox77@online.de' => new PermissionSet(false, false, false, false),
    'wirxx84@gmail.com' => new PermissionSet(false, false, false, false),
    'anatoly.bulanov@financialcommission.org' => new PermissionSet(false, false, false, false),
    'so7.utions@gmail.com' => new PermissionSet(false, false, false, false),
    'ol.eg.kim@gmail.com' => new PermissionSet(false, false, false, false),
    'tanevonharten@gmail.com' => new PermissionSet(false, false, false, false),
    'olegkim@gmail.com' => new PermissionSet(false, false, false, false),
    'olegki.m@gmail.com' => new PermissionSet(false, false, false, false),
    'autoluxury1@gmail.com' => new PermissionSet(false, false, false, false),
    'cadetclifton@gmail.com' => new PermissionSet(false, false, false, false),
    'quest.sg@gmail.com' => new PermissionSet(false, false, false, false),
    'edgarrobertoespinoza@gmail.com' => new PermissionSet(false, false, false, false),
    'sakudryavcev@gmail.com' => new PermissionSet(false, false, false, false),
    'predicateit@gmail.com' => new PermissionSet(false, false, false, false),
    'm128.m128@gmail.com' => new PermissionSet(false, false, false, false),
    'alifarrukh@mail.com' => new PermissionSet(false, false, false, false),
    'anuarnekmas20@gmail.com' => new PermissionSet(false, false, false, false),
    'jule-morning@mail.ru' => new PermissionSet(false, false, false, false),
    'Romu0246@gmail.com' => new PermissionSet(false, false, false, false),
    'autoluxury@gmail.com' => new PermissionSet(false, false, false, false),
    'rajib6127@gmail.com' => new PermissionSet(false, false, false, false),
    'v768121@nwytg.net' => new PermissionSet(false, false, false, false),
    'mrionehuang.seo@gmail.com' => new PermissionSet(false, false, false, false),
    'asyakuzeydeniz1977@mynet.com' => new PermissionSet(false, false, false, false),
    'jez_white@hotmail.com' => new PermissionSet(false, false, false, false),
    'o.leg.kim@gmail.com' => new PermissionSet(false, false, false, false),
    'antonio.chaleta@gmail.com' => new PermissionSet(false, false, false, false),
    's.o7utions@gmail.com' => new PermissionSet(false, false, false, false),
    'oilmaster1978@gmail.com' => new PermissionSet(false, false, false, false),
    'maznosmw@gmail.com' => new PermissionSet(false, false, false, false),
    'popomzz11@gmail.com' => new PermissionSet(false, false, false, false),
    'kocely@hotmail.com' => new PermissionSet(false, false, false, false),
    'jgsaccone@gmail.com' => new PermissionSet(false, false, false, false),
    'edmundo.enrique@hotmail.com' => new PermissionSet(false, false, false, false),
    'elmahiyounesa@gmail.com' => new PermissionSet(false, false, false, false),
    'lmarques@protonmail.com' => new PermissionSet(false, false, false, false),
    'mtigran82@yandex.ru' => new PermissionSet(false, false, false, false),
    'duykhanh0985652998@gmail.com' => new PermissionSet(false, false, false, false),
    'rob@autochartist.com' => new PermissionSet(false, false, false, false),
    'aldinodp@gmail.com' => new PermissionSet(false, false, false, false),
    'styshnoy@mail.ru' => new PermissionSet(false, false, false, false),
    'lukman.salim@live.com' => new PermissionSet(false, false, false, false),
    'hello.zsco@gmail.com' => new PermissionSet(false, false, false, false),
    '3dzuan@gmail.com' => new PermissionSet(false, false, false, false),
    'vmttrader@autochartist.com' => new PermissionSet(false, false, false, false),
    'mdsamy410@gmail.com' => new PermissionSet(false, false, false, false),
    'acharya.kalpesh@gmail.com' => new PermissionSet(false, false, false, false),
    'eosbank88@yahoo.com' => new PermissionSet(false, false, false, false),
    'lok_stock@yahoo.com' => new PermissionSet(false, false, false, false),
    'vmtbroker@autochartist.com' => new PermissionSet(false, false, false, false),
    'agusalhuda95@gmail.com' => new PermissionSet(false, false, false, false),
    'alindiatnooaafrica@gmail.com' => new PermissionSet(false, false, false, false),
    'macguyver21@me.com' => new PermissionSet(false, false, false, false),
    'mkgnshn@gmail.com' => new PermissionSet(false, false, false, false),
    'mailto.metabotfx@gmail.com' => new PermissionSet(false, false, false, false),
    'cocokexin@gmail.com' => new PermissionSet(false, false, false, false),
    'marios_anthis@hotmail.com' => new PermissionSet(false, false, false, false),
    'kuudhingililwaa@gmail.com' => new PermissionSet(false, false, false, false),
    'albexmail@gmail.com' => new PermissionSet(false, false, false, false),
    'farrukh0309@mail.ru' => new PermissionSet(false, false, false, false),
    'franco@netup.com' => new PermissionSet(false, false, false, false),
    'itsganatv@gmail.com' => new PermissionSet(false, false, false, false),
    'nahian87@gmail.com' => new PermissionSet(false, false, false, false),
    'tradomarket16@gmail.com' => new PermissionSet(false, false, false, false),
    'Thienchilam4@gmail.com' => new PermissionSet(false, false, false, false),
    'wolfmanwallst@gmail.com' => new PermissionSet(false, false, false, false),
    'willyk@webmail.co.za' => new PermissionSet(false, false, false, false),
    'marcos.gmg@hotmail.es' => new PermissionSet(false, false, false, false),
    'asgarvahedi90@gmail.com' => new PermissionSet(false, false, false, false),
    'sandilehlabisa3@gmail.com' => new PermissionSet(false, false, false, false),
    'sandilehlabisa3@gmial.com' => new PermissionSet(false, false, false, false),
    'mark@baldiviez.com' => new PermissionSet(false, false, false, false),
    'richdedon01@gmail.com' => new PermissionSet(false, false, false, false),
    'suleimanhassan8877@gmail.com' => new PermissionSet(false, false, false, false),
    'thomaswijaya1981@gmail.com' => new PermissionSet(false, false, false, false),
    'lilirizal2013@gmail.com' => new PermissionSet(false, false, false, false),
    'sidab212@gmail.com' => new PermissionSet(false, false, false, false),
    'rachid.saif.slimani@gmail.com' => new PermissionSet(false, false, false, false),
    'norvalgarebatho@gmail.com' => new PermissionSet(false, false, false, false),
    'minhducn620@gmail.com' => new PermissionSet(false, false, false, false),
    'fadang44@gmail.com' => new PermissionSet(false, false, false, false),
    'spm.1216@mail.ru' => new PermissionSet(false, false, false, false),
    'arupwardi21@gmail.com' => new PermissionSet(false, false, false, false),
    'wipfster@gmail.com' => new PermissionSet(false, false, false, false),
    'arayayonas3@gmail.com' => new PermissionSet(false, false, false, false),
    'k1umtelov@mail.ru' => new PermissionSet(false, false, false, false),
    'kamranforex@gmail.com' => new PermissionSet(false, false, false, false),
    'rann_forex@mail.ru' => new PermissionSet(false, false, false, false),
    'boukhalfahoussem62@gmail.com' => new PermissionSet(false, false, false, false),
    'dluffymonky59@gmail.com' => new PermissionSet(false, false, false, false),
    'aumapornsurisuk@gmail.com' => new PermissionSet(false, false, false, false),
    'thailand67@gmail.com' => new PermissionSet(false, false, false, false),
    'tsepkovm@gmail.com' => new PermissionSet(false, false, false, false),
    'jeremy.white@seertrading.com' => new PermissionSet(false, false, false, false),
    'a7md.diesel@gmail.com' => new PermissionSet(false, false, false, false),
    'anhtinhcodon1992@gmail.com' => new PermissionSet(false, false, false, false),
    'j.s.sujan@gmail.com' => new PermissionSet(false, false, false, false),
    'trading.argentad@gmail.com' => new PermissionSet(false, false, false, false),
    'hellogioco@hotmail.com' => new PermissionSet(false, false, false, false),
    'asidorovster@gmail.com' => new PermissionSet(false, false, false, false),
    'Howard.nkuna@gmail.com' => new PermissionSet(false, false, false, false),
    'renato.ruiz@mail.udp.cl' => new PermissionSet(false, false, false, false),
    'factis452006@gmail.com' => new PermissionSet(false, false, false, false),
    'desumsum@msn.com' => new PermissionSet(false, false, false, false),
    'ravikalyanp@gmail.com' => new PermissionSet(false, false, false, false),
    'mohmd.khair.awelah@gmail.com' => new PermissionSet(false, false, false, false),
    'frankdancer@sbcglobal.net' => new PermissionSet(false, false, false, false),
    'wirablackphone@gmail.com' => new PermissionSet(false, false, false, false),
    'yosvarios@gmail.com' => new PermissionSet(false, false, false, false),
    'jorge20bermudez@gmail.com' => new PermissionSet(false, false, false, false),
    'issa1897@gmail.com' => new PermissionSet(false, false, false, false),
    'vanthuhytq2504@gmail.com' => new PermissionSet(false, false, false, false),
    'vkaski32@gmail.com' => new PermissionSet(false, false, false, false),
    'ericknartey69@gmail.com' => new PermissionSet(false, false, false, false),
    'robertgrznar@yandex.com' => new PermissionSet(false, false, false, false),
    'fm788700@gmail.com' => new PermissionSet(false, false, false, false),
    'masa@dealfx.com' => new PermissionSet(false, false, false, false),
    'amarkumar.march1997@gmail.com' => new PermissionSet(false, false, false, false),
    'grand4596@gmail.com' => new PermissionSet(false, false, false, false),
    'mkhaero@gmail.com' => new PermissionSet(false, false, false, false),
    'retiwari@gmail.com' => new PermissionSet(false, false, false, false),
    'allborisych@gmail.com' => new PermissionSet(false, false, false, false),
    'chkrinakis@gmail.com' => new PermissionSet(false, false, false, false),
    'ridethesurf02@gmail.com' => new PermissionSet(false, false, false, false),
    'saneleterrence2@hotmail.com' => new PermissionSet(false, false, false, false),
    'hood2@me.com' => new PermissionSet(false, false, false, false),
    'pohuy14888@gmail.com' => new PermissionSet(false, false, false, false),
    'rob@horton.co.za' => new PermissionSet(false, false, false, false),
    'jmuntjan@gmail.com' => new PermissionSet(false, false, false, false),
    'willow13@live.com' => new PermissionSet(false, false, false, false),
    'marketrhapsody@gmail.com' => new PermissionSet(false, false, false, false),
    'raymartmanuntag01@gmail.com' => new PermissionSet(false, false, false, false),
    'analyn_redulla@yahoo.com' => new PermissionSet(false, false, false, false),
    'analynredulla@yahoo.com' => new PermissionSet(false, false, false, false),
    'anazilda.2wgh@gmail.com' => new PermissionSet(false, false, false, false),
    'wakiku.tundu@gmail.com' => new PermissionSet(false, false, false, false),
    'mikki632@gmail.com' => new PermissionSet(false, false, false, false),
    'chagasrosemarie.rc@gmail.com' => new PermissionSet(false, false, false, false),
    'beghieroadrace@yahoo.co.id' => new PermissionSet(false, false, false, false),
    'muziharvey@gmail.com' => new PermissionSet(false, false, false, false),
    'lsaid@live.fr' => new PermissionSet(false, false, false, false),
    'femi02rufus@gmail.com' => new PermissionSet(false, false, false, false),
    'dimharhcenko@gmail.com' => new PermissionSet(false, false, false, false),
    'djljktq53@gmail.com' => new PermissionSet(false, false, false, false),
    'glbrehuescu@gmail.com' => new PermissionSet(false, false, false, false),
    'aboeydk.dk@gmail.com' => new PermissionSet(false, false, false, false),
    'nmuetmicro@gmail.com' => new PermissionSet(false, false, false, false),
    'ichimoku63@mail.ru' => new PermissionSet(false, false, false, false),
    'yanpopey@gmail.com' => new PermissionSet(false, false, false, false),
    'hadad.amin@gmail.com' => new PermissionSet(false, false, false, false),
    'damianlitrading@gmail.com' => new PermissionSet(false, false, false, false),
    'tonysydney@hotmail.com' => new PermissionSet(false, false, false, false),
    'dinsolo38@gmail.com' => new PermissionSet(false, false, false, false),
    'lebesasekholome123@gmail.com' => new PermissionSet(false, false, false, false),
    'totati100@gmail.com' => new PermissionSet(false, false, false, false),
    'airidasd75@gmail.com' => new PermissionSet(false, false, false, false),
    'ideabreaker@gmail.com' => new PermissionSet(false, false, false, false),
    'Metro21pro.ads2@gmail.com' => new PermissionSet(false, false, false, false),
    'guneroc@gmail.com' => new PermissionSet(false, false, false, false),
    'wawanyaridwan@gmail.com' => new PermissionSet(false, false, false, false),
    'dtme.finance@outlook.com' => new PermissionSet(false, false, false, false),
    'a7832833@nwytg.net' => new PermissionSet(false, false, false, false),
    'jacques.guy68@orange.fr' => new PermissionSet(false, false, false, false),
    'soeyds_12@mailinator.com' => new PermissionSet(false, false, false, false),
    'ohai.shadrach@cargolandng.com' => new PermissionSet(false, false, false, false),
    'adrian.zaharia@chello.at' => new PermissionSet(false, false, false, false),
    'eksan422@gmail.com' => new PermissionSet(false, false, false, false),
    'cduxadventure@gmail.com' => new PermissionSet(false, false, false, false),
    'kubilay_85_tr@hotmail.com' => new PermissionSet(false, false, false, false),
    'mirulhusna@gmail.com' => new PermissionSet(false, false, false, false),
    'felicio@hotmail.de' => new PermissionSet(false, false, false, false),
    'nhliziyobulunga@gmail.com' => new PermissionSet(false, false, false, false),
    'voanhnhan3010@gmail.com' => new PermissionSet(false, false, false, false),
    'chavorey@gmail.com' => new PermissionSet(false, false, false, false),
    'neoezekield@gmail.com' => new PermissionSet(false, false, false, false),
    'ntazanaendlesslove@gmail.com' => new PermissionSet(false, false, false, false),
    'azamishukri@gmail.com' => new PermissionSet(false, false, false, false),
    'pauladeyemi.trade@gmail.com' => new PermissionSet(false, false, false, false),
    'linggasangkala86@gmail.com' => new PermissionSet(false, false, false, false),
    'tradeone2015@gmail.com' => new PermissionSet(false, false, false, false),
    'danielpolianschi@gmail.com' => new PermissionSet(false, false, false, false),
    'quangthong2405@gmail.com' => new PermissionSet(false, false, false, false),
    'iselemcanthony@gmail.com' => new PermissionSet(false, false, false, false),
    'wnjoroge49@gmail.com' => new PermissionSet(false, false, false, false),
    'lachlanm@gomarkets.com' => new PermissionSet(false, false, false, false),
    'adrivancamargo@gmail.com' => new PermissionSet(false, false, false, false),
    'johnrichacebes20@gmail.com' => new PermissionSet(false, false, false, false),
    'lsteam.iou@gmail.com' => new PermissionSet(false, false, false, false),
    'phamhuyen.260299@gmail.com' => new PermissionSet(false, false, false, false),
    'titsu6789@gmail.com' => new PermissionSet(false, false, false, false),
    'ff.twothings@gmail.com' => new PermissionSet(false, false, false, false),
    'adebeulah@gmail.com' => new PermissionSet(false, false, false, false),
    'azataga78@hotmail.com' => new PermissionSet(false, false, false, false),
    'tamryn@autochartist.com' => new PermissionSet(false, false, false, false),
    'stevej@mailinator.com' => new PermissionSet(false, false, false, false),
    'brokerdemo1@seertrading.com' => new PermissionSet(false, false, false, false),
    'tanigbolasegun@gmail.com' => new PermissionSet(false, false, false, false),
    'wilfried.marie@icloud.com' => new PermissionSet(false, false, false, false),
    'tobias.tan@starfishfx.com' => new PermissionSet(false, false, false, false),
    'wallace.mec@gmail.com' => new PermissionSet(false, false, false, false),
    'ahmedibrahim258258@gmail.com' => new PermissionSet(false, false, false, false),
    'c4956409@nwytg.net' => new PermissionSet(false, false, false, false),
    'demobroker2@seertrading.com' => new PermissionSet(false, false, false, false),
    'demobroker3@seertrading.com' => new PermissionSet(false, false, false, false),
    'ceo@sfx-markets.com' => new PermissionSet(false, false, false, false),
    'on2onlinework@gmail.com' => new PermissionSet(false, false, false, false),
    '0814stanleyflores@gmail.com' => new PermissionSet(false, false, false, false),
    'iyama60@gmail.com' => new PermissionSet(false, false, false, false),
    'opletaev@stforex.com' => new PermissionSet(false, false, false, false),
    'ylivshits@maxiservices.com' => new PermissionSet(false, false, false, false),
    'emaly@manhattan-massage.com' => new PermissionSet(false, false, false, false),
    'mooredontia@gmail.com' => new PermissionSet(false, false, false, false),
    'racquh@gmail.com' => new PermissionSet(false, false, false, false),
    'oluwasanmijide@gmail.com' => new PermissionSet(false, false, false, false),
    'cambizfx@gmail.com' => new PermissionSet(false, false, false, false),
    'qvirus2@gmail.com' => new PermissionSet(false, false, false, false),
    'gregorychizuwatheone@gmail.com' => new PermissionSet(false, false, false, false),
    'cedriclaz67@gmail.com' => new PermissionSet(false, false, false, false),
    'boromic@mail.ru' => new PermissionSet(false, false, false, false),
    'alger.soriano@gmail.com' => new PermissionSet(false, false, false, false),
    'antoinewotto@gmail.com' => new PermissionSet(false, false, false, false),
    'sagarpanika1992@gmail.com' => new PermissionSet(false, false, false, false),
    'cdinh433@gmail.com' => new PermissionSet(false, false, false, false),
    'asponix.elevator@gmail.com' => new PermissionSet(false, false, false, false),
    'mortezamotalebi26@gmail.com' => new PermissionSet(false, false, false, false),
    'michellegpahayahay@gmail.com' => new PermissionSet(false, false, false, false),
    'meysam.shaheri@gmail.com' => new PermissionSet(false, false, false, false),
    'kshulkevich@gmail.com' => new PermissionSet(false, false, false, false),
    'sidibeissouf@gmail.com' => new PermissionSet(false, false, false, false),
    'vassk2687@mail.ru' => new PermissionSet(false, false, false, false),
    'ngkarrock@gmail.com' => new PermissionSet(false, false, false, false),
    'jamesbondnew.newbond007@gmail.com' => new PermissionSet(false, false, false, false),
    'tabunovs@mail.ru' => new PermissionSet(false, false, false, false),
    'dimon4ka@yandex.ru' => new PermissionSet(false, false, false, false),
    'mitchgatila@gmail.com' => new PermissionSet(false, false, false, false),
    'gleisebella76@gmail.com' => new PermissionSet(false, false, false, false),
    'siatjung91@yahoo.com' => new PermissionSet(false, false, false, false),
    'rendraahmad0@gmail.com' => new PermissionSet(false, false, false, false),
    'joyannie1@hotmail.com' => new PermissionSet(false, false, false, false),
    'ipdipd@mail.ru' => new PermissionSet(false, false, false, false),
    'hendiafy@gmail.com' => new PermissionSet(false, false, false, false),
    'kartakuw@gmail.com' => new PermissionSet(false, false, false, false),
    'phaetonw12@yandex.by' => new PermissionSet(false, false, false, false),
    'vasyl92@live.it' => new PermissionSet(false, false, false, false),
    'alowisimohd@gmail.com' => new PermissionSet(false, false, false, false),
    'skudryavtsev.wm@gmail.com' => new PermissionSet(false, false, false, false),
    'asim.khan.387787@gmail.com' => new PermissionSet(false, false, false, false),
    'test01@connectedrope.com' => new PermissionSet(false, false, false, false),
    'vasyl921@gmail.com' => new PermissionSet(false, false, false, false),
    'cambiz2018@gmail.com' => new PermissionSet(false, false, false, false),
    'alowisi@live.com' => new PermissionSet(false, false, false, false),
    'mt.raz.231@gmail.com' => new PermissionSet(false, false, false, false),
    'a92f@yandex.ru' => new PermissionSet(false, false, false, false),
    'Elostoraabdallah@gmail.com' => new PermissionSet(false, false, false, false),
    'vliveshere@gmail.com' => new PermissionSet(false, false, false, false),
    'challys@gmx.de' => new PermissionSet(false, false, false, false),
    'emansulaeman56@gmail.com' => new PermissionSet(false, false, false, false),
    'topdoc@ix.netcom.com' => new PermissionSet(false, false, false, false),
    'mikznteza@gmail.com' => new PermissionSet(false, false, false, false),
    'muppugalla@yahoo.com' => new PermissionSet(false, false, false, false),
    'Ahmad.shoon.451@outlook.com' => new PermissionSet(false, false, false, false),
    'Devanaveen120@gmail.com' => new PermissionSet(false, false, false, false),
    'evectio@yahoo.com.au' => new PermissionSet(false, false, false, false),
    'mrsmsnv@gmail.com' => new PermissionSet(false, false, false, false),
    'mnby.2011@mail.ru' => new PermissionSet(false, false, false, false),
    'modestaani22@gmail.com' => new PermissionSet(false, false, false, false),
    'investing.ts@gmail.com' => new PermissionSet(false, false, false, false),
    'currensix.trading@gmail.com' => new PermissionSet(false, false, false, false),
    'lacksonmlandeli08@gmail.com' => new PermissionSet(false, false, false, false),
    'ari.handriyanto54@gmail.com' => new PermissionSet(false, false, false, false),
    'ibrahimsubhani@gmail.com' => new PermissionSet(false, false, false, false),
    'nurmuxammatx@gmail.com' => new PermissionSet(false, false, false, false),
    'tulus.suryono@gmail.com' => new PermissionSet(false, false, false, false),
    'billionsnet@gmail.com' => new PermissionSet(false, false, false, false),
    'illuminate2018t@gmail.com' => new PermissionSet(false, false, false, false),
    'sergey10041978@gmail.com' => new PermissionSet(false, false, false, false),
    'lemojhesro@gmail.com' => new PermissionSet(false, false, false, false),
    'pietsherif1@gmail.com' => new PermissionSet(false, false, false, false),
    'oan19762005@yandex.ru' => new PermissionSet(false, false, false, false),
    'supriyatnasyahindra1998@gmail.com' => new PermissionSet(false, false, false, false),
    'nkelet08@yahoo.co.uk' => new PermissionSet(false, false, false, false),
    'joshbatubo@gmail.com' => new PermissionSet(false, false, false, false),
    'test124@seertrading.com' => new PermissionSet(false, false, false, false),
    'bernardo.ailton@gmail.com' => new PermissionSet(false, false, false, false),
    'scott.kidder11@gmail.com' => new PermissionSet(false, false, false, false),
    'brad@tolivelong.ca' => new PermissionSet(false, false, false, false),
    'ceo@deltafx.com' => new PermissionSet(false, false, false, false),
    'olayeni2017@yahoo.com' => new PermissionSet(false, false, false, false),
    '79035748769@yandex.ru' => new PermissionSet(false, false, false, false),
    'adol.m55@gmail.com' => new PermissionSet(false, false, false, false),
    'igorklem777@gmail.com' => new PermissionSet(false, false, false, false),
    'masrois46@gmail.com' => new PermissionSet(false, false, false, false),
    '61409212@qq.com' => new PermissionSet(false, false, false, false),
    'ujang.pantry25@gmail.com' => new PermissionSet(false, false, false, false),
    'jutalaktorwiset@gmail.com' => new PermissionSet(false, false, false, false),
    'mhmd.layth@gmail.com' => new PermissionSet(false, false, false, false),
    'viktor78@online.de' => new PermissionSet(false, false, false, false),
    'emohmmad@hotmail.com' => new PermissionSet(false, false, false, false),
    'andreysukhinov@gmail.com' => new PermissionSet(false, false, false, false),
    'remon@nomer-ict.nl' => new PermissionSet(false, false, false, false),
    'vadim-zhuravlev@mail.ru' => new PermissionSet(false, false, false, false),
    'mmriri02@gmail.com' => new PermissionSet(false, false, false, false),
    'paulchilaka03@gmail.com' => new PermissionSet(false, false, false, false),
    'raihan_nu@yahoo.com' => new PermissionSet(false, false, false, false),
    'ragazonsitchad@gmail.com' => new PermissionSet(false, false, false, false),
    'mannys9002@gmail.com' => new PermissionSet(false, false, false, false),
    'shkarupin.vi@mail.ru' => new PermissionSet(false, false, false, false),
    'parsabayat.puza@gmail.com' => new PermissionSet(false, false, false, false),
    'e4sywin@gmail.com' => new PermissionSet(false, false, false, false),
    'reisschristineelizabeth@gmail.com' => new PermissionSet(false, false, false, false),
    'brunobarreiro@gmail.com' => new PermissionSet(false, false, false, false),
    'ngovohoanglong856@gmail.com' => new PermissionSet(false, false, false, false),
    'mthembu12@gmail.com' => new PermissionSet(false, false, false, false),
    'sidikamert44@gmail.com' => new PermissionSet(false, false, false, false),
    'khamkog1979@gmail.com' => new PermissionSet(false, false, false, false),
    '123qwer321@mail.ru' => new PermissionSet(false, false, false, false),
    'brennan434@gmail.com' => new PermissionSet(false, false, false, false),
    'tamogrid@gmail.com' => new PermissionSet(false, false, false, false),
    'wahyujatmiko61@gmail.com' => new PermissionSet(false, false, false, false),
    'anh29022984@gmail.com' => new PermissionSet(false, false, false, false),
    'hcatarroja4395@gmail.com' => new PermissionSet(false, false, false, false),
    'adiratana@gmail.com' => new PermissionSet(false, false, false, false),
    'wahyjatmiko61@gmail.com' => new PermissionSet(false, false, false, false),
    'kohan_jb161@yahoo.com' => new PermissionSet(false, false, false, false),
    'danie.sadistributors@gmail.com' => new PermissionSet(false, false, false, false),
    'afernsuk@gmail.com' => new PermissionSet(false, false, false, false),
    'mseharraza1979@gmail.com' => new PermissionSet(false, false, false, false),
    'ttommy267@gmail.com' => new PermissionSet(false, false, false, false),
    'plxengana@gmail.com' => new PermissionSet(false, false, false, false),
    'jackieechiwaura@gmail.com' => new PermissionSet(false, false, false, false),
    'merita@mail.com' => new PermissionSet(false, false, false, false),
    'cfs.theo@gmail.com' => new PermissionSet(false, false, false, false),
    '5578124@gmail.com' => new PermissionSet(false, false, false, false),
    'info.proresources@gmail.com' => new PermissionSet(false, false, false, false),
    'bratany2003@list.ru' => new PermissionSet(false, false, false, false),
    'nasiliwet93@gmail.com' => new PermissionSet(false, false, false, false),
    'rama.anandhita@gmail.com' => new PermissionSet(false, false, false, false),
    'dibalo012496@gmail.com' => new PermissionSet(false, false, false, false),
    'sdwyss@bluewin.ch' => new PermissionSet(false, false, false, false),
    'mrstraderskpm@gmail.com' => new PermissionSet(false, false, false, false),
    'paulthakhar@gmail.com' => new PermissionSet(false, false, false, false),
    'lizveroni@yahoo.com' => new PermissionSet(false, false, false, false),
    'psenicinii@gmail.com' => new PermissionSet(false, false, false, false),
    'lebedianscky.andrei@yandex.ru' => new PermissionSet(false, false, false, false),
    'ajayewj@gmail.com' => new PermissionSet(false, false, false, false),
    'invprogram@yahoo.com' => new PermissionSet(false, false, false, false),
    'luisvivancomx@gmail.com' => new PermissionSet(false, false, false, false),
    'masud.rana5bibi@gmail.com' => new PermissionSet(false, false, false, false),
    'rajendransoman@hotmail.com' => new PermissionSet(false, false, false, false),
    'Boss.vovka2014@mail.ru' => new PermissionSet(false, false, false, false),
    'kenechukwunelson09@gmail.com' => new PermissionSet(false, false, false, false),
    'instrad.ec@gmail.com' => new PermissionSet(false, false, false, false),
    'kunrosa@gmail.com' => new PermissionSet(false, false, false, false),
    'wy31484@gmail.com' => new PermissionSet(false, false, false, false),
    'bule.sea1983@gmail.com' => new PermissionSet(false, false, false, false),
    'luisjherrera@gmail.com' => new PermissionSet(false, false, false, false),
    'rauof.rahim@gmail.com' => new PermissionSet(false, false, false, false),
    'markus.hohmann@hispeed.ch' => new PermissionSet(false, false, false, false),
    'oghorabah@gmail.com' => new PermissionSet(false, false, false, false),
    'repnikov.maks@yandex.ru' => new PermissionSet(false, false, false, false),
    'evantj83@gmail.com' => new PermissionSet(false, false, false, false),
    'books@haymes.com' => new PermissionSet(false, false, false, false),
    'vvp@29.ru' => new PermissionSet(false, false, false, false),
    'nino.foschi@gmail.com' => new PermissionSet(false, false, false, false),
    'wy31481@gmail.com' => new PermissionSet(false, false, false, false),
    'a.polyakov1@mail.ru' => new PermissionSet(false, false, false, false),
    'bw8606841@gmail.com' => new PermissionSet(false, false, false, false),
    'spillionaire475@gmail.com' => new PermissionSet(false, false, false, false),
    'marcin@madrzak.org' => new PermissionSet(false, false, false, false),
    'jjshang@mailinator.com' => new PermissionSet(false, false, false, false),
    'hieu_lacoste1986@yahoo.com' => new PermissionSet(false, false, false, false),
    'www.abod@gimel.com' => new PermissionSet(false, false, false, false),
    'asajrhabodd@gmail.com' => new PermissionSet(false, false, false, false),
    'otis.elma@gmail.com' => new PermissionSet(false, false, false, false),
    'jazz1john@gmail.com' => new PermissionSet(false, false, false, false),
    'brownsugar5585@gmail.com' => new PermissionSet(false, false, false, false),
    'amir_reza_johari@yahoo.com' => new PermissionSet(false, false, false, false),
    'jjshang@abctrade.com' => new PermissionSet(false, false, false, false),
    'mahmoodpoor.r@yahoo.com' => new PermissionSet(false, false, false, false),
    'j.penkala@op.pl' => new PermissionSet(false, false, false, false),
    'miroslaw.stankowski2@gmail.com' => new PermissionSet(false, false, false, false),
    'vivat234@yandex.ru' => new PermissionSet(false, false, false, false),
    'ying_lloyd@hotmail.com' => new PermissionSet(false, false, false, false),
    'maelfendie73@gmail.com' => new PermissionSet(false, false, false, false),
    'biram34@gmail.com' => new PermissionSet(false, false, false, false),
    'maxerlmax@yahoo.com' => new PermissionSet(false, false, false, false),
    'samuel@bigwhale.co' => new PermissionSet(false, false, false, false),
    'azataga78@hotmayl.com' => new PermissionSet(false, false, false, false),
    'DJBiguza@gmail.com' => new PermissionSet(false, false, false, false),
    'grand606@wp.pl' => new PermissionSet(false, false, false, false),
    'jeremy.white3@seertrading.com' => new PermissionSet(false, false, false, false),
    'tbdwi98@gmail.com' => new PermissionSet(false, false, false, false),
    'kadi.diane1990@gmail.com' => new PermissionSet(false, false, false, false),
    'bndegwa921@gmail.com' => new PermissionSet(false, false, false, false),
    'Newstart842019@gmail.com' => new PermissionSet(false, false, false, false),
    'tentenqn19@gmail.com' => new PermissionSet(false, false, false, false),
    'ardagurman@gmail.com' => new PermissionSet(false, false, false, false),
    'svod_3@mail.ru' => new PermissionSet(false, false, false, false),
    'magnus.altrichter@gmail.com' => new PermissionSet(false, false, false, false),
    'vuthanhtrungvp@gmail.com' => new PermissionSet(false, false, false, false),
    'salimmalik.a786@gmail.com' => new PermissionSet(false, false, false, false),
    'kitithatmaxxx1988@gmail.com' => new PermissionSet(false, false, false, false),
    'donjayazz55@gmail.com' => new PermissionSet(false, false, false, false),
    'luninetsm@tut.by' => new PermissionSet(false, false, false, false),
    'etiangcodejesus@gmail.com' => new PermissionSet(false, false, false, false),
    'assis64@mail.ru' => new PermissionSet(false, false, false, false),
    'mykmah@gmail.com' => new PermissionSet(false, false, false, false),
    'jolatiregun@gmail.com' => new PermissionSet(false, false, false, false),
    'atiker542@gmail.com' => new PermissionSet(false, false, false, false),
    'mhjafari1396@gmail.com' => new PermissionSet(false, false, false, false),
    'vassiliy@ua.fm' => new PermissionSet(false, false, false, false),
    'CuteSyed12@gmail.com' => new PermissionSet(false, false, false, false),
    'sardortanbur@gmail.com' => new PermissionSet(false, false, false, false),
    '4107977@mail.ru' => new PermissionSet(false, false, false, false),
    'teotonioes@hotmail.com' => new PermissionSet(false, false, false, false),
    'maxim101@gmail.com' => new PermissionSet(false, false, false, false),
    'danielgodwin9@gmail.com' => new PermissionSet(false, false, false, false),
    'dimondimonoff@yandex.ru' => new PermissionSet(false, false, false, false),
    'apelsinzp@yandex.ru' => new PermissionSet(false, false, false, false),
    'let970476@gmai.com' => new PermissionSet(false, false, false, false),
    'let970476@gmail.com' => new PermissionSet(false, false, false, false),
    'heshamfouad506@gmail.com' => new PermissionSet(false, false, false, false),
    'gjxnf@tut.by' => new PermissionSet(false, false, false, false),
    'masjoen_dr@yahoo.com' => new PermissionSet(false, false, false, false),
    'elija.dimj@gmail.com' => new PermissionSet(false, false, false, false),
    'timka@programist.ru' => new PermissionSet(false, false, false, false),
    'info.faraham@gmail.com' => new PermissionSet(false, false, false, false),
    'vexelhost@gmail.com' => new PermissionSet(false, false, false, false),
    'mianbabloo1@gmail.com' => new PermissionSet(false, false, false, false),
    'damnednax@mail.ru' => new PermissionSet(false, false, false, false),
    'ar@abedrezaey.com' => new PermissionSet(false, false, false, false),
    'jbaker.pa@hotmail.com' => new PermissionSet(false, false, false, false),
    'habimohd@hotmail.com' => new PermissionSet(false, false, false, false),
    'tebellosilas@gmail.com' => new PermissionSet(false, false, false, false),
    'md.satter2380@gmail.com' => new PermissionSet(false, false, false, false),
    'callput2016@hotmail.com' => new PermissionSet(false, false, false, false),
    'murakaz@rambler.ru' => new PermissionSet(false, false, false, false),
    'flavio.engenharia04@gmail.com' => new PermissionSet(false, false, false, false),
    'admin@optionfield.com' => new PermissionSet(false, false, false, false),
    'm128m128+tt@gmail.com' => new PermissionSet(false, false, false, false),
    'm128m128+yy@gmail.com' => new PermissionSet(false, false, false, false),
    'm128m128+ii@gmail.com' => new PermissionSet(false, false, false, false),
    'm128m128+aa@gmail.com' => new PermissionSet(false, false, false, false),
    'ilan+vmttrader@autochartist.com' => new PermissionSet(false, false, false, false),
    'm1281m28@gmail.com' => new PermissionSet(false, false, false, false),
    'm.128.m128@gmail.com' => new PermissionSet(false, false, false, false),
    'SSKOTIANS@GMAIL.COM' => new PermissionSet(false, false, false, false),
    'clem.agaba@gmail.com' => new PermissionSet(false, false, false, false),
    'u2em13@gmail.com' => new PermissionSet(false, false, false, false),
    'Ewgen01@yandex.ru' => new PermissionSet(false, false, false, false),
    'amerjadid@outlook.com' => new PermissionSet(false, false, false, false),
    'phi86767@gmail.com' => new PermissionSet(false, false, false, false),
    'ip66ip@gmail.com' => new PermissionSet(false, false, false, false),
    'salimkasim@gmail.com' => new PermissionSet(false, false, false, false),
    'hassan.elgaraihy3@gmail.com' => new PermissionSet(false, false, false, false),
    'agorprofir@gmail.com' => new PermissionSet(false, false, false, false),
    'agorprofit@gmail.com' => new PermissionSet(false, false, false, false),
    'lisowaalisa@gmail.com' => new PermissionSet(false, false, false, false),
    'sinelnikovoleg727@gmail.com' => new PermissionSet(false, false, false, false),
    'bbrown416900@gmail.com' => new PermissionSet(false, false, false, false),
    'olex6699@gmail.com' => new PermissionSet(false, false, false, false),
    'helanianray8@gmail.com' => new PermissionSet(false, false, false, false),
    'meinolf.bauschulte@gmx.de' => new PermissionSet(false, false, false, false),
    'mahmoodbasit48@gmail.com' => new PermissionSet(false, false, false, false),
    'konstantin.gmyzin@gmail.com' => new PermissionSet(false, false, false, false),
    'server806@mail.ru' => new PermissionSet(false, false, false, false),
    'mjulian.java@gmail.com' => new PermissionSet(false, false, false, false),
    'ta.trading@telia.com' => new PermissionSet(false, false, false, false),
    'yet2007@hotmsil.com' => new PermissionSet(false, false, false, false),
    'aa.ahmed.ali@gmail.com' => new PermissionSet(false, false, false, false),
    'mustafazia1@gmail.com' => new PermissionSet(false, false, false, false),
    'm128m.1.2.8@gmail.com' => new PermissionSet(false, false, false, false),
    'kocely@gmail.com' => new PermissionSet(false, false, false, false),
    'iazbel@mdio.net' => new PermissionSet(false, false, false, false),
    'nguyenhuyenicloud95@gmail.com' => new PermissionSet(false, false, false, false),
    'chicare17@gmail.com' => new PermissionSet(false, false, false, false),
    'ahmadsendia@gmail.com' => new PermissionSet(false, false, false, false),
    'nick.ssoares@gmail.com' => new PermissionSet(false, false, false, false),
    'basderzxc@gmail.com' => new PermissionSet(false, false, false, false),
    'bdodd9097@gmail.com' => new PermissionSet(false, false, false, false),
    'vanbka1104@gmail.com' => new PermissionSet(false, false, false, false),
    'febr68@yandex.ru' => new PermissionSet(false, false, false, false),
    'zelomefarmer32@gmail.com' => new PermissionSet(false, false, false, false),
    'yet2007@hotmail.com' => new PermissionSet(false, false, false, false),
    'beechawala@gmail.com' => new PermissionSet(false, false, false, false),
    'maqsood.mrmade@gmail.com' => new PermissionSet(false, false, false, false),
    'omar.maatouk@amanacapital.com' => new PermissionSet(false, false, false, false),
    'barnarg70@gmail.com' => new PermissionSet(false, false, false, false),
    'moslemarbabi91@gmail.com' => new PermissionSet(false, false, false, false),
    'rinkyy94@gmail.com' => new PermissionSet(false, false, false, false),
    'canadahouserussia@gmail.com' => new PermissionSet(false, false, false, false),
    'chichchenho@gmail.com' => new PermissionSet(false, false, false, false),
    'phanudestsomlourn@gmail.com' => new PermissionSet(false, false, false, false),
    'sean.moseby@virginmedia.com' => new PermissionSet(false, false, false, false),
    'ziplock.block.clock@gmail.com' => new PermissionSet(false, false, false, false),
    'ahmadrazimohammad8@gmail.com' => new PermissionSet(false, false, false, false),
    'nguyenmelinh92@gmail.com' => new PermissionSet(false, false, false, false),
    'habibfarasat@gmail.com' => new PermissionSet(false, false, false, false),
    'm128m128@gmail.com' => new PermissionSet(false, false, false, false),
    'DemoBroker@seertrading.com' => new PermissionSet(false, false, false, false),
    'sekhokhotumelo@gmail.com' => new PermissionSet(false, false, false, false),
    'Ivan.hard88@gmail.com' => new PermissionSet(false, false, false, false),
    'francescoalbanese1212@gmail.com' => new PermissionSet(false, false, false, false),
    'malikfarooq22550@gmail.com' => new PermissionSet(false, false, false, false),
    'i7hornet@yahoo.com' => new PermissionSet(false, false, false, false),
    'surabayaviptrans@gmail.com' => new PermissionSet(false, false, false, false),
    'sasa1993@gmail.com' => new PermissionSet(false, false, false, false),
    'montana@andorra.ad' => new PermissionSet(false, false, false, false),
    'mariajamaica888@gmail.com' => new PermissionSet(false, false, false, false),
    'shedonyii@gmail.com' => new PermissionSet(false, false, false, false),
    'tananabbn@gmail.com' => new PermissionSet(false, false, false, false),
    'zhernakov211085@mail.ru' => new PermissionSet(false, false, false, false),
    'nguyenmymy1995h@gmail.com' => new PermissionSet(false, false, false, false),
    'ebeneza.mokgadi@gmail.com' => new PermissionSet(false, false, false, false),
    'taras.kyschkanyk@gmail.com' => new PermissionSet(false, false, false, false),
    'jessetoo47@gmail.com' => new PermissionSet(false, false, false, false),
    'alharrif@gmail.com' => new PermissionSet(false, false, false, false),
    'songdji@yahoo.co.id' => new PermissionSet(false, false, false, false),
    'tomsiya5@gmail.com' => new PermissionSet(false, false, false, false),
    'edwinoorkartaatmaja@gmail.com' => new PermissionSet(false, false, false, false),
    'lparulis@mail.ru' => new PermissionSet(false, false, false, false),
    'D0945876646@gmail.com' => new PermissionSet(false, false, false, false),
    'lovery77511@gmail.com' => new PermissionSet(false, false, false, false),
    'lehoanglang1@gmail.com' => new PermissionSet(false, false, false, false),
    'phuc160816@gmal.com' => new PermissionSet(false, false, false, false),
    'zhrkerok@gmail.com' => new PermissionSet(false, false, false, false),
    'shahzee12@yahoo.com' => new PermissionSet(false, false, false, false),
    'lytrucly1@gmail.com' => new PermissionSet(false, false, false, false),
    'nanoooozzzz69@gmail.com' => new PermissionSet(false, false, false, false),
    'srimanthrao.r@gmail.com' => new PermissionSet(false, false, false, false),
    'damariyanrury@gmail.com' => new PermissionSet(false, false, false, false),
    'crinanatasa@gmail.com' => new PermissionSet(false, false, false, false),
    'skzakeer16@gmail.com' => new PermissionSet(false, false, false, false),
    'artemtikhon.87@gmail.com' => new PermissionSet(false, false, false, false),
    'margo.skripkina@mail.ru' => new PermissionSet(false, false, false, false),
    'ajithpre462@gmail.com' => new PermissionSet(false, false, false, false),
    'dictsoni5588@gmail.com' => new PermissionSet(false, false, false, false),
    'master_2014@mail.ru' => new PermissionSet(false, false, false, false),
    'tybeostore184@gmail.com' => new PermissionSet(false, false, false, false),
    'dionusos@otenet.gr' => new PermissionSet(false, false, false, false),
    'shuaibi@live.com' => new PermissionSet(false, false, false, false),
    'revizorkru@gmail.com' => new PermissionSet(false, false, false, false),
    'franciscovillalobos404@gmail.com' => new PermissionSet(false, false, false, false),
    'fxtrade.hani@gmail.com' => new PermissionSet(false, false, false, false),
    'mchikunyana@gmail.com' => new PermissionSet(false, false, false, false),
    'sonikhun410@gmail.com' => new PermissionSet(false, false, false, false),
    'rustamtaziev@gmail.com' => new PermissionSet(false, false, false, false),
    'guotanh88@gmail.com' => new PermissionSet(false, false, false, false),
    'm13800@qq.com' => new PermissionSet(false, false, false, false),
    'makivant@gmail.com' => new PermissionSet(false, false, false, false),
    'nazzy.md@gmail.com' => new PermissionSet(false, false, false, false),
    'sardor4009@gmail.com' => new PermissionSet(false, false, false, false),
    'vj9g@yandex.com' => new PermissionSet(false, false, false, false),
    'gks.binary@gmail.com' => new PermissionSet(false, false, false, false),
    'nhohaycuoi9x003@gmail.com' => new PermissionSet(false, false, false, false),
    'wemi@dewara.com' => new PermissionSet(false, false, false, false),
    'lhpstocktrade@gmail.com' => new PermissionSet(false, false, false, false),
    'Ariel.frutos.123@hotmail.com' => new PermissionSet(false, false, false, false),
    'mcox1@talktalk.net' => new PermissionSet(false, false, false, false),
    'marinelrosu4@gmail.com' => new PermissionSet(false, false, false, false),
    'mzackicamri@gmail.com' => new PermissionSet(false, false, false, false),
    'jakubrehak@atlas.cz' => new PermissionSet(false, false, false, false),
    'tanaput.titaut2526@gmail' => new PermissionSet(false, false, false, false),
    'samewo@yahoo.com' => new PermissionSet(false, false, false, false),
    'asad0095@yahoo.com' => new PermissionSet(false, false, false, false),
    'yayosong.yaimai1883@gmail.com' => new PermissionSet(false, false, false, false),
    'terryvanaverbeke@hotmail.com' => new PermissionSet(false, false, false, false),
    'Koshkarovpavel@gmail.com' => new PermissionSet(false, false, false, false),
    'balong5757@gmail.com' => new PermissionSet(false, false, false, false),
    'davidoyig07@gmail.com' => new PermissionSet(false, false, false, false),
    'originalkamjaguar@bk.ru' => new PermissionSet(false, false, false, false),
    'mr.mohamad1999@yahoo.com' => new PermissionSet(false, false, false, false),
    'angelnona094@gmail.com' => new PermissionSet(false, false, false, false),
    'swapon421@gmail.com' => new PermissionSet(false, false, false, false),
    'forexsession@yahoo.com' => new PermissionSet(false, false, false, false),
    'ngolong222221@gmail.com' => new PermissionSet(false, false, false, false),
    'knightkiller.azure@gmail.com' => new PermissionSet(false, false, false, false),
    'thientuan240786@gmail.com' => new PermissionSet(false, false, false, false),
    'gacon46078@gmail.com' => new PermissionSet(false, false, false, false),
    'camonel_65@yahoo.com' => new PermissionSet(false, false, false, false),
    'm.marsigliese1984@libero.it' => new PermissionSet(false, false, false, false),
    'wakidsyai@gmail.com' => new PermissionSet(false, false, false, false),
    'csorianomn@outlook.com' => new PermissionSet(false, false, false, false),
    'Gerry.schiller@gmail.com' => new PermissionSet(false, false, false, false),
    'dungneon67@gmail.com' => new PermissionSet(false, false, false, false),
    'trungnguyen.noithat999@gmail.com' => new PermissionSet(false, false, false, false),
    'paulus.kei@gmail.com' => new PermissionSet(false, false, false, false),
    'zunguhm@gmail.com' => new PermissionSet(false, false, false, false),
    'alsokolov.1961@gmail.com' => new PermissionSet(false, false, false, false),
    'sergales3@gmail.com' => new PermissionSet(false, false, false, false),
    'qadirbakshchandio@gmail.com' => new PermissionSet(false, false, false, false),
    'ovk969@mail.ru' => new PermissionSet(false, false, false, false),
    'ab_forex@libero.it' => new PermissionSet(false, false, false, false),
    'asepcalo14@gmail.com' => new PermissionSet(false, false, false, false),
    'bobudan24@gmail.com' => new PermissionSet(false, false, false, false),
    'smda9981@gmail.com' => new PermissionSet(false, false, false, false),
    'hostartgaetano@gmail.com' => new PermissionSet(false, false, false, false),
    'aramfido.1994@mail.ru' => new PermissionSet(false, false, false, false),
    'truegear2017@gmail.com' => new PermissionSet(false, false, false, false),
    'carrentutti@gmail' => new PermissionSet(false, false, false, false),
    'sucker77pro@gmail.com' => new PermissionSet(false, false, false, false),
    'aminefx12@gmail.com' => new PermissionSet(false, false, false, false),
    'kiwihal@yahoo.com' => new PermissionSet(false, false, false, false),
    'devsalesforce@outlook.com' => new PermissionSet(false, false, false, false),
    'aleksei.ivanovich77@mail.ru' => new PermissionSet(false, false, false, false),
    'sam871992@gmail.com' => new PermissionSet(false, false, false, false),
    'boerse@trissler.com' => new PermissionSet(false, false, false, false),
    'ossama_aly@yahoo.com' => new PermissionSet(false, false, false, false),
    'mjmokobi@gmail.com' => new PermissionSet(false, false, false, false),
    'jamp.vj@gmail.com' => new PermissionSet(false, false, false, false),
    'aleksandrromanov8@gmail.com' => new PermissionSet(false, false, false, false),
    'comunidadesfsp@gmail.com' => new PermissionSet(false, false, false, false),
    'tonysutrisno@gmail.com' => new PermissionSet(false, false, false, false),
    'mehrab.zandi@yahoo.com' => new PermissionSet(false, false, false, false),
    'jeangastienkwimangfouby@gmail.com' => new PermissionSet(false, false, false, false),
    'michalaadamec@gmail.com' => new PermissionSet(false, false, false, false),
    'isabilillah@yahoo.com' => new PermissionSet(false, false, false, false),
    'finaacca@yahoo.com' => new PermissionSet(false, false, false, false),
    'primteb@yahoo.com' => new PermissionSet(false, false, false, false),
    'billhelou@hotmail.com' => new PermissionSet(false, false, false, false),
    'pyrigsergio@gmail.com' => new PermissionSet(false, false, false, false),
    'bainasko@yahoo.com' => new PermissionSet(false, false, false, false),
    'marendradevi2@gmail.com' => new PermissionSet(false, false, false, false),
    'ahmadmonem@outlook.com' => new PermissionSet(false, false, false, false),
    'eduardo_caldas@icloud.com' => new PermissionSet(false, false, false, false),
    'itandtrade@gmail.com' => new PermissionSet(false, false, false, false),
    'gbmemo@hotmail.com' => new PermissionSet(false, false, false, false),
    'nurdin518@ymail.com' => new PermissionSet(false, false, false, false),
    'adoola2010@yahoo.com' => new PermissionSet(false, false, false, false),
    'koramama9@gmail.com' => new PermissionSet(false, false, false, false),
    'jatisukma9@gmail.com' => new PermissionSet(false, false, false, false),
    'suyanto322.wa@gmail.com' => new PermissionSet(false, false, false, false),
    'wellmath@gmail.com' => new PermissionSet(false, false, false, false),
    'test89@seertrading.com' => new PermissionSet(false, false, false, false),
    'sv12.stoycheva@gmail.com' => new PermissionSet(false, false, false, false),
    'oleg76spb.srt@gmail.com' => new PermissionSet(false, false, false, false),
    'matjekamb@gmail.com' => new PermissionSet(false, false, false, false),
    'tati_812002@yahoo.com' => new PermissionSet(false, false, false, false),
    'relax@clearlight-saunas.com.au' => new PermissionSet(false, false, false, false),
    'bryd2404@gmail.com' => new PermissionSet(false, false, false, false),
    'juliuspermana@hotmail.com' => new PermissionSet(false, false, false, false),
    'czehmeiszter.j@gmail.com' => new PermissionSet(false, false, false, false),
    'nateclass@univtech.ac.za' => new PermissionSet(false, false, false, false),
    'afternaftr@yahoo.com' => new PermissionSet(false, false, false, false),
    'firs62@mail.ru' => new PermissionSet(false, false, false, false),
    'Denkom@mail.ru' => new PermissionSet(false, false, false, false),
    'goldetective1@outlook.com' => new PermissionSet(false, false, false, false),
    'carlosaraujo627@gmail.com' => new PermissionSet(false, false, false, false),
    'mubeendogar944@gmail.com' => new PermissionSet(false, false, false, false),
    'lequytoan44138@gmail.com' => new PermissionSet(false, false, false, false),
    'vlitov49@mail.ru' => new PermissionSet(false, false, false, false),
    'levlad2@inbox.ru' => new PermissionSet(false, false, false, false),
    'luckykambowo@gmail.com' => new PermissionSet(false, false, false, false),
    'info@vomconstruct.be' => new PermissionSet(false, false, false, false),
    'sudhir.sinha@gmail.com' => new PermissionSet(false, false, false, false),
    'ahmed.mwidani97@gmail.com' => new PermissionSet(false, false, false, false),
    'cutiemukwevho@gmail.com' => new PermissionSet(false, false, false, false),
    'aleksey2304811@mail.ru' => new PermissionSet(false, false, false, false),
    'nelyerisbotello17@gmail.com' => new PermissionSet(false, false, false, false),
    'jocornerstone2013@yahoo.com' => new PermissionSet(false, false, false, false),
    'endro07@gmail.com' => new PermissionSet(false, false, false, false),
    'nik.cnt@gmail.com' => new PermissionSet(false, false, false, false),
    'milos@smerda.net' => new PermissionSet(false, false, false, false),
    'damir.lamza@gmail.com' => new PermissionSet(false, false, false, false),
    'k.lot69@gmail.com' => new PermissionSet(false, false, false, false),
    'didine2mahboul@yahoo.fr' => new PermissionSet(false, false, false, false),
    'keith-pereira@hotmail.com' => new PermissionSet(false, false, false, false),
    'tafo_16_7@hotmail.com' => new PermissionSet(false, false, false, false),
    'j.kameneckas@gmail.com' => new PermissionSet(false, false, false, false),
    'ardurrani@gmail.com' => new PermissionSet(false, false, false, false),
    'muhamed.oka@gmail.com' => new PermissionSet(false, false, false, false),
    'ecochem@mclink.it' => new PermissionSet(false, false, false, false),
    'ahmedhammad405@yahoo.com' => new PermissionSet(false, false, false, false),
    'treider.smolensk@yandex.ru' => new PermissionSet(false, false, false, false),
    'egoisthomo@mail.ru' => new PermissionSet(false, false, false, false),
    'nttam.277@gmail.com' => new PermissionSet(false, false, false, false),
    'opheliar37@gmail.com' => new PermissionSet(false, false, false, false),
    'nordva@hotmail.com' => new PermissionSet(false, false, false, false),
    'martinwatheka14@gmail.com' => new PermissionSet(false, false, false, false),
    'angelgevanny@gmail.com' => new PermissionSet(false, false, false, false),
    'ahmedsamiramin@gmail.com' => new PermissionSet(false, false, false, false),
    'vl_sergeev@list.ru' => new PermissionSet(false, false, false, false),
    'osamanps@gmail.com' => new PermissionSet(false, false, false, false),
    'minnierethabile@gmail.com' => new PermissionSet(false, false, false, false),
    'jomfx123@gmail.com' => new PermissionSet(false, false, false, false),
    'd.ranto@yahoo.co.id' => new PermissionSet(false, false, false, false),
    'gcrivellih@hotmail.com' => new PermissionSet(false, false, false, false),
    'testNew41@seertrading.com' => new PermissionSet(false, false, false, false),
    'zeidsm@gmail.com' => new PermissionSet(false, false, false, false),
    'rue009.outlook@gmail.com' => new PermissionSet(false, false, false, false),
    'jlopes68@ymail.com' => new PermissionSet(false, false, false, false),
    'boypaule@yahoo.com' => new PermissionSet(false, false, false, false),
    'taerqbraim@hotmail.com' => new PermissionSet(false, false, false, false),
    'kristal_namiq@mail.ru' => new PermissionSet(false, false, false, false),
    'gagusting@yahoo.es' => new PermissionSet(false, false, false, false),
    'alexeyev.o@gmail.com' => new PermissionSet(false, false, false, false),
    'alex_www@bk.ru' => new PermissionSet(false, false, false, false),
    'carlospetri80@web.de' => new PermissionSet(false, false, false, false),
    'adventureyki@gmail.com' => new PermissionSet(false, false, false, false),
    'bukhorijoss@gmail.com' => new PermissionSet(false, false, false, false),
    'jacquesbicca1@gmail.com' => new PermissionSet(false, false, false, false),
    'adel.shaker@yahoo.com' => new PermissionSet(false, false, false, false),
    'sobolev_ivan@list.ru' => new PermissionSet(false, false, false, false),
    'ARCHIE@HOTMAIL.RS' => new PermissionSet(false, false, false, false),
    'ilsor59@msn.com' => new PermissionSet(false, false, false, false),
    'senakaab@gmail.com' => new PermissionSet(false, false, false, false),
    'tnyamwanza@yahoo.com' => new PermissionSet(false, false, false, false),
    'a.khvorostov@mail.ru' => new PermissionSet(false, false, false, false),
    'zaidie@outloook.com' => new PermissionSet(false, false, false, false),
    '2mc@live.com.ar' => new PermissionSet(false, false, false, false),
    'hisham-mousa@windowslive.com' => new PermissionSet(false, false, false, false),
    'kencringan@gmail.com' => new PermissionSet(false, false, false, false),
    'eidan.alasmari@hotmail.com' => new PermissionSet(false, false, false, false),
    'gholamrezakoolivand56@gmail.com' => new PermissionSet(false, false, false, false),
    'futfortrader@gmail.com' => new PermissionSet(false, false, false, false),
    'stari4ekDevis@yandex.ru' => new PermissionSet(false, false, false, false),
    'verafx@outlook.com' => new PermissionSet(false, false, false, false),
    'davide.mori@gmail.com' => new PermissionSet(false, false, false, false),
    'bandiw25@gmail.com' => new PermissionSet(false, false, false, false),
    'randyfordvan@gmail.com' => new PermissionSet(false, false, false, false),
    'ivliev@gmail.com' => new PermissionSet(false, false, false, false),
    'livestonejobs@hotmail.com' => new PermissionSet(false, false, false, false),
    'vovan631987@gmail.com' => new PermissionSet(false, false, false, false),
    'khosravisohrab@gmail.com' => new PermissionSet(false, false, false, false),
    'filvitek@gmail.com' => new PermissionSet(false, false, false, false),
    'hakki.gulsen@mynet.com' => new PermissionSet(false, false, false, false),
    'asmamulla51@gmail.com' => new PermissionSet(false, false, false, false),
    'zulhilmi.adnan.28@gmail.com' => new PermissionSet(false, false, false, false),
    'qbthanh@gmail.com' => new PermissionSet(false, false, false, false),
    'arasakultoyib@yahoo.com' => new PermissionSet(false, false, false, false),
    'raouldecasa@gmail.com' => new PermissionSet(false, false, false, false),
    'hntduy1992@gmail.com' => new PermissionSet(false, false, false, false),
    'kim@sortvik.com' => new PermissionSet(false, false, false, false),
    'catharhina@libero.it' => new PermissionSet(false, false, false, false),
    'waell5@yahoo.com' => new PermissionSet(false, false, false, false),
    'q8fawazq8@hotmail.com' => new PermissionSet(false, false, false, false),
    'kazantchouk@mail.ru' => new PermissionSet(false, false, false, false),
    'filigrif@gmail.com' => new PermissionSet(false, false, false, false),
    'seomail@post.com' => new PermissionSet(false, false, false, false),
    'ejvind.pedersen@connection2denmark.dk' => new PermissionSet(false, false, false, false),
    'jherimaulana@gmail.com' => new PermissionSet(false, false, false, false),
    'pak.are.free@gmail.com' => new PermissionSet(false, false, false, false),
    'silvioroberto2009@globo.com' => new PermissionSet(false, false, false, false),
    'bajma@mail.ru' => new PermissionSet(false, false, false, false),
    'kevinstanley@sky.com' => new PermissionSet(false, false, false, false),
    'intimail13@yahoo.com' => new PermissionSet(false, false, false, false),
    'semargl144@gmail.com' => new PermissionSet(false, false, false, false),
    'mr.grand-europe@mail.ru' => new PermissionSet(false, false, false, false),
    'lipe.gmattos@yahoo.com.br' => new PermissionSet(false, false, false, false),
    'ufa161287@rambler.ru' => new PermissionSet(false, false, false, false),
    'amrane0787@gmail.com' => new PermissionSet(false, false, false, false),
    'kyaloalbert@gmail.com' => new PermissionSet(false, false, false, false),
    'tradehub88@gmail.com' => new PermissionSet(false, false, false, false),
    'warleymariano22@hotmail.com' => new PermissionSet(false, false, false, false),
    'tehnikaelektronik@gmail.com' => new PermissionSet(false, false, false, false),
    'tjoma-muravkin@rambler.ru' => new PermissionSet(false, false, false, false),
    'cleanbioenergy@gmail.com' => new PermissionSet(false, false, false, false),
    'Skrejg@gmail.com' => new PermissionSet(false, false, false, false),
    'ret1974.ivanov@yandex.ru' => new PermissionSet(false, false, false, false),
    'dan_okere@yahoo.com' => new PermissionSet(false, false, false, false),
    'andrejsstrupits@inbox.lv' => new PermissionSet(false, false, false, false),
    'lilis1261@yahoo.com' => new PermissionSet(false, false, false, false),
    'kayprince1@yahoo.co.uk' => new PermissionSet(false, false, false, false),
    'centramgt.ibras@gmail.com' => new PermissionSet(false, false, false, false),
    'daneddu@gmail.com' => new PermissionSet(false, false, false, false),
    'big.boniek77@gmail.com' => new PermissionSet(false, false, false, false),
    'johansabin@yahoo.fr' => new PermissionSet(false, false, false, false),
    'm.samateh360@gmail.com' => new PermissionSet(false, false, false, false),
    'hithost@list.ru' => new PermissionSet(false, false, false, false),
    'stefanov1973@mail.ru' => new PermissionSet(false, false, false, false),
    'lusandantoni04@gmail.com' => new PermissionSet(false, false, false, false),
    'rizal.alkuja@gmail.com' => new PermissionSet(false, false, false, false),
    'nataliia.kuchmai@mail.ru' => new PermissionSet(false, false, false, false),
    'koksymaglo@gmail.com' => new PermissionSet(false, false, false, false),
    'bunas74@tut.by' => new PermissionSet(false, false, false, false),
    'elagin_oleg13@mail.ru' => new PermissionSet(false, false, false, false),
    'azathalmaz@gmail.com' => new PermissionSet(false, false, false, false),
    'samirahqutub@yahoo.com' => new PermissionSet(false, false, false, false),
    'gafurova.evgeniya@mail.ru' => new PermissionSet(false, false, false, false),
    'marckow.vol@yandex.ru' => new PermissionSet(false, false, false, false),
    'bonlife17@mail.ru' => new PermissionSet(false, false, false, false),
    'javaven2002@yahoo.com' => new PermissionSet(false, false, false, false),
    'tarjeikr@yahoo.com' => new PermissionSet(false, false, false, false),
    'johnferns456@gmail.com' => new PermissionSet(false, false, false, false),
    'talptekin@hotmail.com.tr' => new PermissionSet(false, false, false, false),
    'statibot@hotmail.com' => new PermissionSet(false, false, false, false),
    'tarek.bright@gmail.com' => new PermissionSet(false, false, false, false),
    'richardfrost25@yandex.ru' => new PermissionSet(false, false, false, false),
    'test42@seertrading.com' => new PermissionSet(false, false, false, false),
    'joshua.hamlet@gmail.com' => new PermissionSet(false, false, false, false),
    'mr.atifali05@gmail.com' => new PermissionSet(false, false, false, false),
    'wajhi_malik@hotmail.com' => new PermissionSet(false, false, false, false),
    'nahrowi887@gmail.com' => new PermissionSet(false, false, false, false),
    'pradeepsjv@gmail.com' => new PermissionSet(false, false, false, false),
    'thorusnuevoamanecer@gmail.com' => new PermissionSet(false, false, false, false),
    'moorecapitalinvestments@gmail.com' => new PermissionSet(false, false, false, false),
    'jyrivaarmets@gmail.com' => new PermissionSet(false, false, false, false),
    'mytreasurelife@yahoo.com' => new PermissionSet(false, false, false, false),
    'Andyatf@yahoo.com' => new PermissionSet(false, false, false, false),
    'julyzep@gmail.com' => new PermissionSet(false, false, false, false),
    'vadim46b@mail.ru' => new PermissionSet(false, false, false, false),
    'merkaya20@gmail.com' => new PermissionSet(false, false, false, false),
    'dim271278@mail.ru' => new PermissionSet(false, false, false, false),
    'houcine.a.caid@gmail.com' => new PermissionSet(false, false, false, false),
    'cjestebanez@hotmail.es' => new PermissionSet(false, false, false, false),
    'mr.SergeyVB@mail.ru' => new PermissionSet(false, false, false, false),
    'anselmo1956@hotmail.com' => new PermissionSet(false, false, false, false),
    'haithem.kamal@gmail.com' => new PermissionSet(false, false, false, false),
    'yes.richard@hotmail.com' => new PermissionSet(false, false, false, false),
    'ahmed_elseby@hotmail.com' => new PermissionSet(false, false, false, false),
    'asm80@bk.ru' => new PermissionSet(false, false, false, false),
    'wahyumagelang24@gmail.com' => new PermissionSet(false, false, false, false),
    'dladlasazi@gmail.com' => new PermissionSet(false, false, false, false),
    'portiadahwa86@gmail.com' => new PermissionSet(false, false, false, false),
    'mustafabey75@gmail.com' => new PermissionSet(false, false, false, false),
    'tanyavm@abv.bg' => new PermissionSet(false, false, false, false),
    'heruchintia@gmail.com' => new PermissionSet(false, false, false, false),
    'ashrafsaber@yahoo.com' => new PermissionSet(false, false, false, false),
    'agungjayakrisna@gmail.com' => new PermissionSet(false, false, false, false),
    'Rahal.UAE@hotmail.com' => new PermissionSet(false, false, false, false),
    'neefwSwepaklyScathetuh@halemail.bid' => new PermissionSet(false, false, false, false),
    'sbeavis@mac.com' => new PermissionSet(false, false, false, false),
    'ram22222@bk.ru' => new PermissionSet(false, false, false, false),
    'ammarmeza@gmail.com' => new PermissionSet(false, false, false, false),
    'hvzzn@outlook.com' => new PermissionSet(false, false, false, false),
    'uberemako@yahoo.com' => new PermissionSet(false, false, false, false),
    'hr.setiawan@gmail.com' => new PermissionSet(false, false, false, false),
    'iefuzzer@hotmail.com' => new PermissionSet(false, false, false, false),
    'bastianpschmidt@gmail.com' => new PermissionSet(false, false, false, false),
    'ftnobre@yahoo.com.br' => new PermissionSet(false, false, false, false),
    'vicsandel_bina@hotmail.com' => new PermissionSet(false, false, false, false),
    'agbeje37@gmail.com' => new PermissionSet(false, false, false, false),
    'Hemty@msn.com' => new PermissionSet(false, false, false, false),
    'irinakiev12345@gmail.com' => new PermissionSet(false, false, false, false),
    'vanioc89@mail.ru' => new PermissionSet(false, false, false, false),
    'malidus.reinhard@gmail.com' => new PermissionSet(false, false, false, false),
    'asad.tajir@gmail.com' => new PermissionSet(false, false, false, false),
    'khechoyan_gevorg@mail.ru' => new PermissionSet(false, false, false, false),
    'MSpaniard@yandex.ru' => new PermissionSet(false, false, false, false),
    'nwachukwuhope33@yahoo.com' => new PermissionSet(false, false, false, false),
    'LMOUACIWALYD@GMAIL.COM' => new PermissionSet(false, false, false, false),
    'olimp270808@gmail.com' => new PermissionSet(false, false, false, false),
    'michael.m.mccormack@gmail.com' => new PermissionSet(false, false, false, false),
    'adverthere@gmail.com' => new PermissionSet(false, false, false, false),
    'jonkokanchev2@gmail.com' => new PermissionSet(false, false, false, false),
    'd.yeleuov@gmail.com' => new PermissionSet(false, false, false, false),
    'ucjd@yandex.ru' => new PermissionSet(false, false, false, false),
    'domini@live.com.pt' => new PermissionSet(false, false, false, false),
    'sermus.alex@gmail.com' => new PermissionSet(false, false, false, false),
    'jkingccis@yahoo.com' => new PermissionSet(false, false, false, false),
    'vova_petrov.18@mail.ru' => new PermissionSet(false, false, false, false),
    'isdjas@hotmail.com' => new PermissionSet(false, false, false, false),
    'h.okopna@gmail.com' => new PermissionSet(false, false, false, false),
    'unlockmenow2014@gmail.com' => new PermissionSet(false, false, false, false),
    'travolta.72@mail.ru' => new PermissionSet(false, false, false, false),
    'goezblezat@gmail.com' => new PermissionSet(false, false, false, false),
    'm.baranyi@freemail.hu' => new PermissionSet(false, false, false, false),
    'Timmille82@gmail.com' => new PermissionSet(false, false, false, false),
    'remialuko2007@gmail.com' => new PermissionSet(false, false, false, false),
    'kokkong2324@yahoo.com.sg' => new PermissionSet(false, false, false, false),
    'rachidechcherrate@gmail.com' => new PermissionSet(false, false, false, false),
    'ilya_dementev_00@inbox.ru' => new PermissionSet(false, false, false, false),
    'mityagin2301@mail.ru' => new PermissionSet(false, false, false, false),
    'Gena___74@mail.ru' => new PermissionSet(false, false, false, false),
    'viano02@yahoo.com' => new PermissionSet(false, false, false, false),
    'keithkriver@gmail.com' => new PermissionSet(false, false, false, false),
    'demo_swissquote@verifymytrade.com' => new PermissionSet(false, false, false, false),
    'dennybochmann@aol.com' => new PermissionSet(false, false, false, false),
    'gerhart.huemer@hue-mer.eu' => new PermissionSet(false, false, false, false),
    'atef.abdelhadi71@gmail.com' => new PermissionSet(false, false, false, false),
    'mjankwi@gmail.com' => new PermissionSet(false, false, false, false),
    'hirchmony@gmail.com' => new PermissionSet(false, false, false, false),
    'kozak_sf@mail.ru' => new PermissionSet(false, false, false, false),
    'waynegajadhar@gmail.com' => new PermissionSet(false, false, false, false),
    'benezim7@gmail.com' => new PermissionSet(false, false, false, false),
    'valerijsablin55@gmail.com' => new PermissionSet(false, false, false, false),
    'blacksymbol@list.ru' => new PermissionSet(false, false, false, false),
    'forster.peter@gmail.com' => new PermissionSet(false, false, false, false),
    'denkoolagin@gmail.com' => new PermissionSet(false, false, false, false),
    'esennura@mail.ru' => new PermissionSet(false, false, false, false),
    'vadim.dobroskok@faceit.com.ua' => new PermissionSet(false, false, false, false),
    'fidalis@gmail.com' => new PermissionSet(false, false, false, false),
    'ervir.lalaj@gmail.com' => new PermissionSet(false, false, false, false),
    'testing@seertrading.com' => new PermissionSet(false, false, false, false),
    'batholekopa@gmail.com' => new PermissionSet(false, false, false, false),
    'chambemichaelt@gmail.com' => new PermissionSet(false, false, false, false),
    'andyteros05@gmail.com' => new PermissionSet(false, false, false, false),
    'paul@autochartist.com' => new PermissionSet(false, false, false, false),
    'jhonwong007@gmail.com' => new PermissionSet(false, false, false, false),
    'happymusa@yahoo.com' => new PermissionSet(false, false, false, false),
    'r_samit@yahoo.co.in' => new PermissionSet(false, false, false, false),
    'mytrade@mailinator.com' => new PermissionSet(false, false, false, false),
    'aircrimp@hotmail.com' => new PermissionSet(false, false, false, false),
    'badruade5@gmail.com' => new PermissionSet(false, false, false, false),
    'schmidtsamuel97@gmail.com' => new PermissionSet(false, false, false, false),
    'mmoloki03@gmail.com' => new PermissionSet(false, false, false, false),
    'abdellahelfassi133@gmail.com' => new PermissionSet(false, false, false, false),
    'info@mbgestion.com' => new PermissionSet(false, false, false, false),
    'abduo.dj@gmail.com' => new PermissionSet(false, false, false, false),
    'nurdinghifary@gmail.com' => new PermissionSet(false, false, false, false),
    'matwei42@yandex.ru' => new PermissionSet(false, false, false, false),
    'bbtt181@gmail.com' => new PermissionSet(false, false, false, false),
    'carloswceron@hotmail.com' => new PermissionSet(false, false, false, false),
    'nechyporuk.a@gmail.com' => new PermissionSet(false, false, false, false),
    'test6@seertrading.com' => new PermissionSet(false, false, false, false),
    'baasithsyifaa@gmail.com' => new PermissionSet(false, false, false, false),
    'jeremy.white5@seertrading.com' => new PermissionSet(false, false, false, false),
    'jeremy.white7@seertrading.com' => new PermissionSet(false, false, false, false),
    'vd1@mailinator.com' => new PermissionSet(false, false, false, false),
    'lieliek2205@gmail.com' => new PermissionSet(false, false, false, false),
    'test9@seertrading.com' => new PermissionSet(false, false, false, false),
    'banggaru23@gmail.com' => new PermissionSet(false, false, false, false),
    'mslmanmohed@hotmail.com' => new PermissionSet(false, false, false, false),
    'bogatsup40@gmail.com' => new PermissionSet(false, false, false, false),
    'a.okadu@gmail.com' => new PermissionSet(false, false, false, false),
    'Alireexport@Gmail.com' => new PermissionSet(false, false, false, false),
    'sfjjvg@gmail.com' => new PermissionSet(false, false, false, false),
    'costyayakovlev24@yandex.ru' => new PermissionSet(false, false, false, false),
    'andrey.nikitin.86@bk.ru' => new PermissionSet(false, false, false, false),
    'ensar.guengoer@me.com' => new PermissionSet(false, false, false, false),
    'edneijorge@ymail.com' => new PermissionSet(false, false, false, false),
    'info@nkitseng.co.za' => new PermissionSet(false, false, false, false),
    'comfortotenewaa@gmail.com' => new PermissionSet(false, false, false, false),
    'marcusleme@gmail.com' => new PermissionSet(false, false, false, false),
    'samuelotegbayo1@gmail.com' => new PermissionSet(false, false, false, false),
    'tolkunov1960@mail.ru' => new PermissionSet(false, false, false, false),
    'osmo5929@mail.ru' => new PermissionSet(false, false, false, false),
    'Kemuning135@yahoo.com' => new PermissionSet(false, false, false, false),
    'basara54p@gmail.com' => new PermissionSet(false, false, false, false),
    'thwalaxb@gmail.com' => new PermissionSet(false, false, false, false),
    'budipartyx08@gmail.com' => new PermissionSet(false, false, false, false),
    'a.mahmoud.a@gmail.com' => new PermissionSet(false, false, false, false),
    'cotenko.aleck@mail.ru' => new PermissionSet(false, false, false, false),
    'vinogradstr2@mail.ru' => new PermissionSet(false, false, false, false),
    'grinkivmisa16@gmail.com' => new PermissionSet(false, false, false, false),
    'ciugulea.tudorel@gmail.com' => new PermissionSet(false, false, false, false),
    'raphaelbayang@gmail.com' => new PermissionSet(false, false, false, false),
    'hamed20m@gmail.com' => new PermissionSet(false, false, false, false),
    'mfarazfard@gmail.com' => new PermissionSet(false, false, false, false),
    'ferdy.ari@gmail.com' => new PermissionSet(false, false, false, false),
    'imyani77713@gmail.com' => new PermissionSet(false, false, false, false),
    'Vikramat@hotmail.co.nz' => new PermissionSet(false, false, false, false),
    'taivan-83@mail.ru' => new PermissionSet(false, false, false, false),
    'rafiek77@hotmail.com' => new PermissionSet(false, false, false, false),
    'Ifr.creative@gmail.com' => new PermissionSet(false, false, false, false),
    'halanski81@mail.ru' => new PermissionSet(false, false, false, false),
    'firebolt17@gmail.com' => new PermissionSet(false, false, false, false),
    'pazguy@gmail.com' => new PermissionSet(false, false, false, false),
    'parthgohel05@gmail.com' => new PermissionSet(false, false, false, false),
    'q.good@rambler.r' => new PermissionSet(false, false, false, false),
    'i.s.modaresi@gmail.com' => new PermissionSet(false, false, false, false),
    'crack3411@gmail.com' => new PermissionSet(false, false, false, false),
    'thanasis.sianos@gmail.com' => new PermissionSet(false, false, false, false),
    'test41mess@seertrading.com' => new PermissionSet(false, false, false, false),
    'moh23540@gmail.com' => new PermissionSet(false, false, false, false),
    'dowdow2020@yahoo.com' => new PermissionSet(false, false, false, false),
    'katrinmelody@gmail.com' => new PermissionSet(false, false, false, false),
    'Antar100@yandex.ru' => new PermissionSet(false, false, false, false),
    'indrabayuprasetyafbs@gmail.com' => new PermissionSet(false, false, false, false),
    'mixail65@mail.ru' => new PermissionSet(false, false, false, false),
    'akurosaki65@gmail.com' => new PermissionSet(false, false, false, false),
    'igarunia@mail.ru' => new PermissionSet(false, false, false, false),
    'igor_200875@mail.ru' => new PermissionSet(false, false, false, false),
    'segrud@gmail.com' => new PermissionSet(false, false, false, false),
    'mekahveci@gmail.com' => new PermissionSet(false, false, false, false),
    'adejohh@outlook.com' => new PermissionSet(false, false, false, false),
    'khaleelope@gmail.com' => new PermissionSet(false, false, false, false),
    '6silvio9@gmail.com' => new PermissionSet(false, false, false, false),
    'konst.popov2026@yandex.ru' => new PermissionSet(false, false, false, false),
    'mario.camachos@outlook.com' => new PermissionSet(false, false, false, false),
    'impexsheikh@gmail.com' => new PermissionSet(false, false, false, false),
    'andrey19862012@gmail.com' => new PermissionSet(false, false, false, false),
    'battalgzsari@hotmail.com' => new PermissionSet(false, false, false, false),
    'poniran1979@gmail.com' => new PermissionSet(false, false, false, false),
    'petuhovm995@gmail.com' => new PermissionSet(false, false, false, false),
    'tadyjunior21@gmail.com' => new PermissionSet(false, false, false, false),
    'leha-veter@mail.ru' => new PermissionSet(false, false, false, false),
    'Taqim.qurthuby@yahoo.com' => new PermissionSet(false, false, false, false),
    'Chidieberemmerioma@gmail.com' => new PermissionSet(false, false, false, false),
    'fabulousmanniomr@live.com' => new PermissionSet(false, false, false, false),
    'vd3@mailinator.com' => new PermissionSet(false, false, false, false),
    'waleed.hussam995@gmail.com' => new PermissionSet(false, false, false, false),
    'janek@formax.ee' => new PermissionSet(false, false, false, false),
    'trojan-v@inbox.ru' => new PermissionSet(false, false, false, false),
    'taatpribadi85@gmail.com' => new PermissionSet(false, false, false, false),
    'farokh.firoozi.66@gmail.com' => new PermissionSet(false, false, false, false),
    'niko21977@gmail.com' => new PermissionSet(false, false, false, false),
    'anuarnekmas@yahoo.com' => new PermissionSet(false, false, false, false),
    'jlekwot@gmx.com' => new PermissionSet(false, false, false, false),
    'ndzolongqov@gmail.com' => new PermissionSet(false, false, false, false),
    'indrifi3yanti@gmail.com' => new PermissionSet(false, false, false, false),
    'lksjjpnmarjov@rambler.ru' => new PermissionSet(false, false, false, false),
    'franklopes0777@outlook.com' => new PermissionSet(false, false, false, false),
    'sebastian.est11@gmail.com' => new PermissionSet(false, false, false, false),
    'yuriko333333@gmail.com' => new PermissionSet(false, false, false, false),
    'tpdinfx@gmail.com' => new PermissionSet(false, false, false, false),
    'ayman.maarouf@hotmail.com' => new PermissionSet(false, false, false, false),
    'leon2020@live.com' => new PermissionSet(false, false, false, false),
    'truongkimphuc0209@gmail.com' => new PermissionSet(false, false, false, false),
    'altay.muslim99@mail.ru' => new PermissionSet(false, false, false, false),
    'karunaaleks@mail.ru' => new PermissionSet(false, false, false, false),
    'yuritzmc@gmail.com' => new PermissionSet(false, false, false, false),
    'gsbeetar@gmail.com' => new PermissionSet(false, false, false, false),
    'shaileshcrane@yahoo.com' => new PermissionSet(false, false, false, false),
    'railiaquat111@gmail.com' => new PermissionSet(false, false, false, false),
    'lunlady83@gmail.com' => new PermissionSet(false, false, false, false),
    'khamisco55@gmail.com' => new PermissionSet(false, false, false, false),
    'draganroskar@gmail.com' => new PermissionSet(false, false, false, false),
    'sinhkhongcon@gmail.com' => new PermissionSet(false, false, false, false),
    'pudjiantopo2@gmail.com' => new PermissionSet(false, false, false, false),
    'ngheoroo1982@gmail.com' => new PermissionSet(false, false, false, false),
    'jagopayfx@gmail.com' => new PermissionSet(false, false, false, false),
    'idpinet@gmail.com' => new PermissionSet(false, false, false, false),
    'ahmadmusavi952@gmail.com' => new PermissionSet(false, false, false, false),
    'danghai1990@gmail.com' => new PermissionSet(false, false, false, false),
    'marthofer5@gmail.com' => new PermissionSet(false, false, false, false),
    'georeto90@abv.bg' => new PermissionSet(false, false, false, false),
    'rita.ariella@gmail.com' => new PermissionSet(false, false, false, false),
    'bigatizf@gmail.com' => new PermissionSet(false, false, false, false),
    'rebecasantelli@gmail.com' => new PermissionSet(false, false, false, false),
    'ddeniz_3478@hotmail.com' => new PermissionSet(false, false, false, false),
    'grishakov.p@yandex.ru' => new PermissionSet(false, false, false, false),
    'hadiacc.17@gmail.com' => new PermissionSet(false, false, false, false),
    'as.0656042108@gmail.com' => new PermissionSet(false, false, false, false),
    'fonseca_nuno@hotmail.com' => new PermissionSet(false, false, false, false),
    'shienjin@bi-xi.cn' => new PermissionSet(false, false, false, false),
    'mercymwitwa64@gmail.com' => new PermissionSet(false, false, false, false),
    'danglongduy123@gmail.com' => new PermissionSet(false, false, false, false),
    'olidoblessing@gmail.com' => new PermissionSet(false, false, false, false),
    'malmokoena@gmail.com' => new PermissionSet(false, false, false, false),
    'trp.tc5335@gmail.com' => new PermissionSet(false, false, false, false),
    'datbackodoithu@gmail.com' => new PermissionSet(false, false, false, false),
    'goyaloilmill@gmail.com' => new PermissionSet(false, false, false, false),
    'khoimihh73@gmail.com' => new PermissionSet(false, false, false, false),
    'cw.jones.j09@gmail.com' => new PermissionSet(false, false, false, false),
    'dream_interactive@yahoo.co.uk' => new PermissionSet(false, false, false, false),
    'peopletrade@yandex.ru' => new PermissionSet(false, false, false, false),
    'balakishorema@gmail.com' => new PermissionSet(false, false, false, false),
    'm_tan76@hotmail.com' => new PermissionSet(false, false, false, false),
    'hoangnguyen19913110@gmail.com' => new PermissionSet(false, false, false, false),
    'i79252218960@gmail.com' => new PermissionSet(false, false, false, false),
    'unfinishedrhapsody@hotmail.com' => new PermissionSet(false, false, false, false),
    'p0652260909@gmail.com' => new PermissionSet(false, false, false, false),
    'avv.geo@mail.ru' => new PermissionSet(false, false, false, false),
    'adejobiadewale62@gmail.com' => new PermissionSet(false, false, false, false),
    'mubuwetav@mail-point.net' => new PermissionSet(false, false, false, false),
    'viwogovu@cloud-mail.net' => new PermissionSet(false, false, false, false),
    'geokpheng@yahoo.com' => new PermissionSet(false, false, false, false),
    'egdp60@gmail.com' => new PermissionSet(false, false, false, false),
    'posman80@gmail.com' => new PermissionSet(false, false, false, false),
    'l0ngd4ik4@gmail.com' => new PermissionSet(false, false, false, false),
    'brush196714@gmail.com' => new PermissionSet(false, false, false, false),
    'rsonib@gmail.com' => new PermissionSet(false, false, false, false),
    'md.asatter44@gmail.com' => new PermissionSet(false, false, false, false),
    'almutair4040@gmail.com' => new PermissionSet(false, false, false, false),
    'sabri.loverhot@gmail.com' => new PermissionSet(false, false, false, false),
    'qwe1asd1zxc@gmail.com' => new PermissionSet(false, false, false, false),
    'richardaewood@gmail.com' => new PermissionSet(false, false, false, false),
    'vifne@yahoo.es' => new PermissionSet(false, false, false, false),
    'ggilvanei1@gmail.com' => new PermissionSet(false, false, false, false),
    'GoharLKhilji@hotmail.com' => new PermissionSet(false, false, false, false),
    'kohalmiz@gmx.com' => new PermissionSet(false, false, false, false),
    'lourdesempuesto636@gmail.com' => new PermissionSet(false, false, false, false),
    'juicy1728@gmail.com' => new PermissionSet(false, false, false, false),
    'snigga08@mail.ru' => new PermissionSet(false, false, false, false),
    'lichrun@163.com' => new PermissionSet(false, false, false, false),
    's0595309930@gmail.com' => new PermissionSet(false, false, false, false),
    'mrlionfx@gmail.com' => new PermissionSet(false, false, false, false),
    'lempuesto23@gmail.com' => new PermissionSet(false, false, false, false),
    'msh292@gmail.com' => new PermissionSet(false, false, false, false),
    'vlatch@yandex.ru' => new PermissionSet(false, false, false, false),
    'natuproph@gmail.com' => new PermissionSet(false, false, false, false),
    'rmpakki@gmail.com' => new PermissionSet(false, false, false, false),
    'phanmanh951993@gmail.com' => new PermissionSet(false, false, false, false),
    'bayusmartghetto@gmail.com' => new PermissionSet(false, false, false, false),
    'rmanikandhan@gmail.com' => new PermissionSet(false, false, false, false),
    'test5@verifymytrade.com' => new PermissionSet(false, false, false, false),
    'adiel20calix@gmail.com' => new PermissionSet(false, false, false, false),
    'khuongngoc0640@gmail.com' => new PermissionSet(false, false, false, false),
    'arichebaya@gmail.com' => new PermissionSet(false, false, false, false),
    'eliberto.santana@hotmail.com' => new PermissionSet(false, false, false, false),
    'jafarheydari552@gmail.com' => new PermissionSet(false, false, false, false),
    'jafarheydari552@gmail.comj' => new PermissionSet(false, false, false, false),
    'mzarimi@yahoo.com' => new PermissionSet(false, false, false, false),
    'vantrong11111vn@gmail.com' => new PermissionSet(false, false, false, false),
    'mohammadfarari1360@gmail.com' => new PermissionSet(false, false, false, false),
    'samtrinston@gmail.com' => new PermissionSet(false, false, false, false),
    'test77@seertrading.com' => new PermissionSet(false, false, false, false),
    'vdd@mailinator.com' => new PermissionSet(false, false, false, false),
    'juhari.akbar@gmail.com' => new PermissionSet(false, false, false, false),
    'vd2@mailinator.com' => new PermissionSet(false, false, false, false),
    'oleksiy.ivanov@gmail.com' => new PermissionSet(false, false, false, false),
    'alephbaabc@gmail.com' => new PermissionSet(false, false, false, false),
    'jeanmichelle1976@gmail.com' => new PermissionSet(false, false, false, false),
    't.yusupk@gmail.com' => new PermissionSet(false, false, false, false),
    'ssoru@yandex.ru' => new PermissionSet(false, false, false, false),
    'airalex@hotmail.de' => new PermissionSet(false, false, false, false),
    'serzh-piter@inbox.ru' => new PermissionSet(false, false, false, false),
    'akteryasmin557@gmail.com' => new PermissionSet(false, false, false, false),
    'baseerazimi056@gmail.com' => new PermissionSet(false, false, false, false),
    'michal.pazura.80@gmail.com' => new PermissionSet(false, false, false, false),
    'parastoo52ph@gmail.com' => new PermissionSet(false, false, false, false),
    'kobus@autochartist.com' => new PermissionSet(false, false, false, false),
    'sergeyn@tradefred.com' => new PermissionSet(false, false, false, false),
    'qwe1asd1zxc@exist.com' => new PermissionSet(false, false, false, false),
    'dmitriyvladimer@gmail.com' => new PermissionSet(false, false, false, false),
    'herbaman24mx@gmail.com' => new PermissionSet(false, false, false, false),
    'progma137@gmail.com' => new PermissionSet(false, false, false, false),
    'piranha34doc@gmail.com' => new PermissionSet(false, false, false, false),
    'varadas108@ya.ru' => new PermissionSet(false, false, false, false),
    'hrenfx@mail.ru' => new PermissionSet(false, false, false, false),
    'mdmlkdjeer_1540849085@tfbnw.net' => new PermissionSet(false, false, false, false),
    'denis_dronov90@mail.ru' => new PermissionSet(false, false, false, false),
    'dgeetha175@gmail.com' => new PermissionSet(false, false, false, false),
    'zink.my@mail.com' => new PermissionSet(false, false, false, false),
    'felix.kurilov@gmail.com' => new PermissionSet(false, false, false, false),
    'keb.tema@yandex.ru' => new PermissionSet(false, false, false, false),
    'samme59@yahoo.ca' => new PermissionSet(false, false, false, false),
    'wesana4321@gmail.com' => new PermissionSet(false, false, false, false),
    'naidinpasha@gmail.com' => new PermissionSet(false, false, false, false),
    'stupidessay@gmail.com' => new PermissionSet(false, false, false, false),
    'appletrixie30@gmail.com' => new PermissionSet(false, false, false, false),
    'thanh874tn@gmail.com' => new PermissionSet(false, false, false, false),
    'finlaytate13@gmail.com' => new PermissionSet(false, false, false, false),
    'fortune9829@outlook.com' => new PermissionSet(false, false, false, false),
    'salmaan8979218387@gmail.com' => new PermissionSet(false, false, false, false),
    'vbruzhina@gmail.com' => new PermissionSet(false, false, false, false),
    'oessam@rocketmail.com' => new PermissionSet(false, false, false, false),
    'ibrarkhalil007@gmail.com' => new PermissionSet(false, false, false, false),
    'mkmoleg@gmail.com' => new PermissionSet(false, false, false, false),
    'ramirolopez883@gmail.com' => new PermissionSet(false, false, false, false),
    'robo59fx@gmail.com' => new PermissionSet(false, false, false, false),
    'zamasgoal@gmail.com' => new PermissionSet(false, false, false, false),
    'eugene.novik@gmail.com' => new PermissionSet(false, false, false, false),
    'dannyy0000@gmail.com' => new PermissionSet(false, false, false, false),
    'jamaxiboy@gmail.com' => new PermissionSet(false, false, false, false),
    'halit@mail.ru' => new PermissionSet(false, false, false, false),
    'takeprofit.ltd@gmail.com' => new PermissionSet(false, false, false, false),
    'pr.denis.klimov@gmail.com' => new PermissionSet(false, false, false, false),
    'cometrader8345@gmail.com' => new PermissionSet(false, false, false, false),
    'mhd.sayydulsanjaya@gmail.com' => new PermissionSet(false, false, false, false),
    'ali.srsr90009@gmail.com' => new PermissionSet(false, false, false, false),
    'brilev.sania@yandex.ru' => new PermissionSet(false, false, false, false),
    'masterahammed@gmail.com' => new PermissionSet(false, false, false, false),
    'arunamishra613@gmail.com' => new PermissionSet(false, false, false, false),
    'zulqarnainanjum17@gmail.com' => new PermissionSet(false, false, false, false),
    'vuongnet1994@gmail.com' => new PermissionSet(false, false, false, false),
    'profit.fxlois@gmail.com' => new PermissionSet(false, false, false, false),
    'apelsinzp@meta.ua' => new PermissionSet(false, false, false, false),
    'karunrathi3@gmail.com' => new PermissionSet(false, false, false, false),
    'rooh2047@gmail.com' => new PermissionSet(false, false, false, false),
    'bitokkiprono@gmail.com' => new PermissionSet(false, false, false, false),
    'caninwe2@gmail.com' => new PermissionSet(false, false, false, false),
    'nt694508@gmail.com' => new PermissionSet(false, false, false, false),
    'obiora.aninyei@yahoo.com' => new PermissionSet(false, false, false, false),
    'adisbwid@gmail.com' => new PermissionSet(false, false, false, false),
    'kashemnur387@gmail.com' => new PermissionSet(false, false, false, false),
    'derman4001@gmail.com' => new PermissionSet(false, false, false, false),
    'douglas.reith@pepperstone.com' => new PermissionSet(false, false, false, false),
    'himmatseva1@gmail.com' => new PermissionSet(false, false, false, false),
    'ladikemi@hotmail.com' => new PermissionSet(false, false, false, false),
    'jobalekside@gmail.com' => new PermissionSet(false, false, false, false),
    'rehobothgeorge@gmail.com' => new PermissionSet(false, false, false, false),
    'abubakar15@outlook.co.id' => new PermissionSet(false, false, false, false),
    'neale.fy@gmail.com' => new PermissionSet(false, false, false, false),
    'jubairhukum.62@gmail.com' => new PermissionSet(false, false, false, false),
    'jubairbaharuddin53@gmail.com' => new PermissionSet(false, false, false, false),
    'ckwoh@hotmail.com' => new PermissionSet(false, false, false, false),
    'miasmisshuan@gmail.com' => new PermissionSet(false, false, false, false),
    'duc021755@gmail.com' => new PermissionSet(false, false, false, false),
    'neluvelg@gmail.com' => new PermissionSet(false, false, false, false),
    'forex1binary@gmail.com' => new PermissionSet(false, false, false, false),
    'eurusdusdeur@gmail.com' => new PermissionSet(false, false, false, false),
    'nail.sibra@yandex.ru' => new PermissionSet(false, false, false, false),
    'Binkapponmwashetur@gmail.com' => new PermissionSet(false, false, false, false),
    'shandysoesanto3@gmail.com' => new PermissionSet(false, false, false, false),
    'waa98988@gmail.com' => new PermissionSet(false, false, false, false),
    'skalik67@gmail.com' => new PermissionSet(false, false, false, false),
    'arifputra1987@gmail.com' => new PermissionSet(false, false, false, false),
    'o.voitova@nbrb.by' => new PermissionSet(false, false, false, false),
    'adang.g.mugara@gmail.com' => new PermissionSet(false, false, false, false),
    'eryana982@gmail.com' => new PermissionSet(false, false, false, false),
    'katlegomokota2@gmail.com' => new PermissionSet(false, false, false, false),
    'natsikape@gmail.com' => new PermissionSet(false, false, false, false),
    'kamjiraaboonnam27@gmail.com' => new PermissionSet(false, false, false, false),
    'ebayins29@gmail.com' => new PermissionSet(false, false, false, false),
    'test_large@verifymytrade.com' => new PermissionSet(false, false, false, false),
    'jurijkn@gmail.com' => new PermissionSet(false, false, false, false),
    'jhanmamasalagat722@gmail.com' => new PermissionSet(false, false, false, false),
    'Ismoil.rasulov.1997@mail.ru' => new PermissionSet(false, false, false, false),
    'vdo5@mailinator.com' => new PermissionSet(false, false, false, false),
    'kap_69@mail.ru' => new PermissionSet(false, false, false, false),
    'williamwambugu28@gmail.com' => new PermissionSet(false, false, false, false),
    'ramsudhs@yahoo.co.za' => new PermissionSet(false, false, false, false),
    'joymariemallillin@yahoo.com' => new PermissionSet(false, false, false, false),
    'iblackjaguar@hotmail.com' => new PermissionSet(false, false, false, false),
    'joymariemallillin33@gmail.com' => new PermissionSet(false, false, false, false),
    'joymariemallillin33@yahoo.com' => new PermissionSet(false, false, false, false),
    'denishorvat.slo@gmail.com' => new PermissionSet(false, false, false, false),
    'k_saad_g@yahoo.com' => new PermissionSet(false, false, false, false),
    'dothanhtung.0992@gmail.com' => new PermissionSet(false, false, false, false),
    'erikozeee@gmail.com' => new PermissionSet(false, false, false, false),
    'hamdoun10@outlook.sa' => new PermissionSet(false, false, false, false),
    'muhammadasadjaved1234@gmail.com' => new PermissionSet(false, false, false, false),
    'nolan.duval@techie.com' => new PermissionSet(false, false, false, false),
    'wesleykips@yahoo.com' => new PermissionSet(false, false, false, false),
    'slkramer72@gmail.com' => new PermissionSet(false, false, false, false),
    'sergiopapas11@gmail.com' => new PermissionSet(false, false, false, false),
    'mulyanasaep@gmail.com' => new PermissionSet(false, false, false, false),
    'ballhysakreshnik@gmail.com' => new PermissionSet(false, false, false, false),
    'ivonotbad@gmail.com' => new PermissionSet(false, false, false, false),
    'jerryherry36@gmail.com' => new PermissionSet(false, false, false, false),
    'skalozub67@ukr.net' => new PermissionSet(false, false, false, false),
    'eny.tronic@gmail.com' => new PermissionSet(false, false, false, false),
    'luckytips@yahoo.com' => new PermissionSet(false, false, false, false),
    'michaelpratt68@hotmail.com' => new PermissionSet(false, false, false, false),
    'kaza2217@ymail.com' => new PermissionSet(false, false, false, false),
    'enoxl@hotmail.com' => new PermissionSet(false, false, false, false),
    'alexkury@inbox.ru' => new PermissionSet(false, false, false, false),
    'abuhfdh@gmail.com' => new PermissionSet(false, false, false, false),
    'osha1@rambler.ru' => new PermissionSet(false, false, false, false),
    'yury.sniper65@yandex.ru' => new PermissionSet(false, false, false, false),
    'shareefsialpk@gmail.com' => new PermissionSet(false, false, false, false),
    'anuzbright5151@gmail.com' => new PermissionSet(false, false, false, false),
    'jan.schuurman4@gmail.com' => new PermissionSet(false, false, false, false),
    'ddfghjpp@gmail.com' => new PermissionSet(false, false, false, false),
    'qqww43889@gmail.com' => new PermissionSet(false, false, false, false),
    'test_large@seertrading.com' => new PermissionSet(false, false, false, false),
    'dsm982@rambler.ru' => new PermissionSet(false, false, false, false),
    'davisalmeid@gmail.com' => new PermissionSet(false, false, false, false),
    'vd5@mailinator.com' => new PermissionSet(false, false, false, false),
    'kaosenwan@gmail.com' => new PermissionSet(false, false, false, false),
    'k.b.setlhare@gmail.com' => new PermissionSet(false, false, false, false),
    'swgtradingco@gmail.com' => new PermissionSet(false, false, false, false),
    'ferrypradanna@gmail.com' => new PermissionSet(false, false, false, false),
    'widododuwiono@yahoo.co.id' => new PermissionSet(false, false, false, false),
    'getref.555@gmail.com' => new PermissionSet(false, false, false, false),
    'muthiaasriva@gmail.com' => new PermissionSet(false, false, false, false),
    'c123389@nwytg.com' => new PermissionSet(false, false, false, false),
    'johnbakugan10@gmail.com' => new PermissionSet(false, false, false, false),
    'mr.serz.75@yandex.ru' => new PermissionSet(false, false, false, false),
    'kberichon@gmail.com' => new PermissionSet(false, false, false, false),
    'rainanekagrosir@gmail.com' => new PermissionSet(false, false, false, false),
    'wahyuni.rizky.101014@gmail.com' => new PermissionSet(false, false, false, false),
    'test_new44@seertrading.com' => new PermissionSet(false, false, false, false),
    'jgillespiejr@hotmail.com' => new PermissionSet(false, false, false, false),
    'rishat88@gmail.com' => new PermissionSet(false, false, false, false),
    'williamsminini5@gmail.com' => new PermissionSet(false, false, false, false),
    'mike.herriot@gmail.com' => new PermissionSet(false, false, false, false),
    'hairo218mine@gmail.com' => new PermissionSet(false, false, false, false),
    'jennifertonga53@gmail.com' => new PermissionSet(false, false, false, false),
    'koko@ethersportz.info' => new PermissionSet(false, false, false, false),
    'trangly665@gmail.com' => new PermissionSet(false, false, false, false),
    'nks5021@yahoo.com' => new PermissionSet(false, false, false, false),
    'ruska128@gmail.com' => new PermissionSet(false, false, false, false),
    'juanmcayabyab@gmail.com' => new PermissionSet(false, false, false, false),
    'rajkafx@gmail.com' => new PermissionSet(false, false, false, false),
    'anggarizkia86@gmail.com' => new PermissionSet(false, false, false, false),
    'belbase.manoj@yahoo.com' => new PermissionSet(false, false, false, false),
    'urb.kaddouri@gmail.com' => new PermissionSet(false, false, false, false),
    'g.janoudy@gmail.com' => new PermissionSet(false, false, false, false),
    'mkholongo@gmail.com' => new PermissionSet(false, false, false, false),
    '45acpmm@gmail.com' => new PermissionSet(false, false, false, false),
    'binaryoption.vk@gmail.com' => new PermissionSet(false, false, false, false),
    'kabugag@gmail.com' => new PermissionSet(false, false, false, false),
    'mpagano@hotmail.it' => new PermissionSet(false, false, false, false),
    'pedrojaimerodriguez@gmail.com' => new PermissionSet(false, false, false, false),
    'backer.seyam@gmail.com' => new PermissionSet(false, false, false, false),
    'snatur999@gmail.com' => new PermissionSet(false, false, false, false),
    'kcsman8@hotmail.com' => new PermissionSet(false, false, false, false),
    'eminemkionna@gmail.com' => new PermissionSet(false, false, false, false),
    'rostagyula@hotmail.com' => new PermissionSet(false, false, false, false),
    'mosamashele1@gmail.com' => new PermissionSet(false, false, false, false),
    'jerinjsn@gmail.com' => new PermissionSet(false, false, false, false),
    'david.shammah.a.p@gmail.com' => new PermissionSet(false, false, false, false),
    'farrukh0309@gmail.com' => new PermissionSet(false, false, false, false),
    'mafamalataliana@gmail.com' => new PermissionSet(false, false, false, false),
    'zandokan281058@gmail.com' => new PermissionSet(false, false, false, false),
    'renanzforex@gmail.com' => new PermissionSet(false, false, false, false),
    'wilymu@gmail.com' => new PermissionSet(false, false, false, false),
    'yahyaalnaami@gmail.com' => new PermissionSet(false, false, false, false),
    'ultratrader72@gmail.com' => new PermissionSet(false, false, false, false),
    'phgafoor@gmail.com' => new PermissionSet(false, false, false, false),
    'motimeng@gmail.com' => new PermissionSet(false, false, false, false),
    'nvkhoivt@gmail.com' => new PermissionSet(false, false, false, false),
    'Didalelwa1987@gmail.com' => new PermissionSet(false, false, false, false),
    'bergamo75@yahoo.it' => new PermissionSet(false, false, false, false),
    'claudioalgieri@hotmail.com' => new PermissionSet(false, false, false, false),
    'prodtest@seertrading.com' => new PermissionSet(false, false, false, false),
    'sabina.osyanju@gmail.com' => new PermissionSet(false, false, false, false),
    'mohaiken6@gmail.com' => new PermissionSet(false, false, false, false),
    'm.abbasi11@gmail.com' => new PermissionSet(false, false, false, false),
    'afnurgaliev@gmail.com' => new PermissionSet(false, false, false, false),
    'vv2@mailinator.com' => new PermissionSet(false, false, false, false),
    'sergeyonenko@mail.ru' => new PermissionSet(false, false, false, false),
    'saravuth@outlook.com.au' => new PermissionSet(false, false, false, false),
    'ahmedlotfy662@gmail.com' => new PermissionSet(false, false, false, false),
    'lsergey70@mail.ru' => new PermissionSet(false, false, false, false),
    'ludmila022@yandex.ru' => new PermissionSet(false, false, false, false),
    'ayman.tawil@gmail.com' => new PermissionSet(false, false, false, false),
    'jvvz@hotmail.com' => new PermissionSet(false, false, false, false),
    'german.agra10@gmail.com' => new PermissionSet(false, false, false, false),
    'Telish142857@gmail.com' => new PermissionSet(false, false, false, false),
    'aldo.sarracino@gmail.com' => new PermissionSet(false, false, false, false),
    'Suwiji.sugianto@yahoo.com' => new PermissionSet(false, false, false, false),
    'jen.mari@yahoo.ie' => new PermissionSet(false, false, false, false),
    'givrebler@yahoo.com' => new PermissionSet(false, false, false, false),
    'joseph.marzbani@gmail.com' => new PermissionSet(false, false, false, false),
    'm719salon@gmail.com' => new PermissionSet(false, false, false, false),
    'hanzaleh.a.n@gmail.com' => new PermissionSet(false, false, false, false),
    'stcmus3@gmail.com' => new PermissionSet(false, false, false, false),
    'm719nailsalon@gmail.com' => new PermissionSet(false, false, false, false),
    'brupet2003@gmail.com' => new PermissionSet(false, false, false, false),
    'iwiyisi2002@yahoo.com' => new PermissionSet(false, false, false, false),
    'imrunga@gmail.com' => new PermissionSet(false, false, false, false),
    'etihgroz@hotmail.com' => new PermissionSet(false, false, false, false),
    'bbenetatos@gmail.com' => new PermissionSet(false, false, false, false),
    'vasyaya60@gmail.com' => new PermissionSet(false, false, false, false),
    'oleg03081988@yandex.ru' => new PermissionSet(false, false, false, false),
    'saltuksenkop@gmail.com' => new PermissionSet(false, false, false, false),
    'daencaba@gmail.com' => new PermissionSet(false, false, false, false),
    'jaan.liiv@gmail.com' => new PermissionSet(false, false, false, false),
    'minimalistconcepts@gmail.com' => new PermissionSet(false, false, false, false),
    'andrew.housedjs@gmail.com' => new PermissionSet(false, false, false, false),
    'nincheousanliti@gmail.com' => new PermissionSet(false, false, false, false),
    'alessio@failla.co.uk' => new PermissionSet(false, false, false, false),
    'skendel@yandex.ru' => new PermissionSet(false, false, false, false),
    'katsmi@hol.gr' => new PermissionSet(false, false, false, false),
    'alejo.haad@hotmail.com' => new PermissionSet(false, false, false, false),
    'younesberthe@gmail.com' => new PermissionSet(false, false, false, false),
    'temooralam@hotmail.com' => new PermissionSet(false, false, false, false),
    'febrieko.saifudin@gmail.com' => new PermissionSet(false, false, false, false),
    'demo_avatrade@verifymytrade.com' => new PermissionSet(false, false, false, false),
    'vdolgov@indigosoft.net' => new PermissionSet(false, false, false, false),
    'ajdl77@hotmail.com' => new PermissionSet(false, false, false, false),
    'mudit.misra30@gmail.com' => new PermissionSet(false, false, false, false),
    'claudenilsonvirgilio@yahoo.com.br' => new PermissionSet(false, false, false, false),
    'madacky@gmail.com' => new PermissionSet(false, false, false, false),
    'sdjamaleddine2015@hotmail.com' => new PermissionSet(false, false, false, false),
    'david.alejandro.esparza.22@gmail.com' => new PermissionSet(false, false, false, false),
    'd_t.y.s@hotmail.com' => new PermissionSet(false, false, false, false),
    'jmachado_nic@yahoo.com' => new PermissionSet(false, false, false, false),
    'cunhalm@gmail.com' => new PermissionSet(false, false, false, false),
    'villalbacristian775@gmail.com' => new PermissionSet(false, false, false, false),
    'evgenijvolosin994@gmail.com' => new PermissionSet(false, false, false, false),
    'waleed_elsharif@yahoo.com' => new PermissionSet(false, false, false, false),
    'AlXXX1705@gmail.com' => new PermissionSet(false, false, false, false),
    'rome.selekoe@gmail.com' => new PermissionSet(false, false, false, false),
    'martor.dignos@gmail.com' => new PermissionSet(false, false, false, false),
    'melahat.deda@gmail.com' => new PermissionSet(false, false, false, false),
    'talip06duran@gmail.com' => new PermissionSet(false, false, false, false),
    'comincio_scelza@hotmail.com' => new PermissionSet(false, false, false, false),
    'jonathan.maphanga@gmail.com' => new PermissionSet(false, false, false, false),
    'erinsonvillarroel@gmail.com' => new PermissionSet(false, false, false, false),
    'cstoica06@gmail.com' => new PermissionSet(false, false, false, false),
    'vitaliscezeilo@gmail.com' => new PermissionSet(false, false, false, false),
    'priyanaveein@gmail.com' => new PermissionSet(false, false, false, false),
    'yeddohs@yahoo.fr' => new PermissionSet(false, false, false, false),
    'wikisafi@gmail.com' => new PermissionSet(false, false, false, false),
    'marklewis049@gmail.com' => new PermissionSet(false, false, false, false),
    'danny.gawande@gmail.com' => new PermissionSet(false, false, false, false),
    'ahmedyehia1997@yahoo.com' => new PermissionSet(false, false, false, false),
    'chrisbulloch@live.com.au' => new PermissionSet(false, false, false, false),
    'asdrubalcardona@hotmail.com' => new PermissionSet(false, false, false, false),
    'ydarmoni@gmail.com' => new PermissionSet(false, false, false, false),
    'yamin2000@GMAIL.com' => new PermissionSet(false, false, false, false),
    'syedcomm@gmail.com' => new PermissionSet(false, false, false, false),
    'don@broadbeachinvestments.com.au' => new PermissionSet(false, false, false, false),
    'jonmitchell2000@gmail.com' => new PermissionSet(false, false, false, false),
    'anto13642@gmail.com' => new PermissionSet(false, false, false, false),
    'ticastigo@gmail.com' => new PermissionSet(false, false, false, false),
    'sarifalamni@gmail.com' => new PermissionSet(false, false, false, false),
    'bogdan.dima74@gmail.com' => new PermissionSet(false, false, false, false),
    'cb_83@mail.ru' => new PermissionSet(false, false, false, false),
    'tombath@gmail.com' => new PermissionSet(false, false, false, false),
    'austinofx@gmail.com' => new PermissionSet(false, false, false, false),
    'daniele780@gmail.com' => new PermissionSet(false, false, false, false),
    'darias40141@yahoo.co.id' => new PermissionSet(false, false, false, false),
    'noma1003@outlook.com' => new PermissionSet(false, false, false, false),
    'mohammad.syafri.w@gamil.com' => new PermissionSet(false, false, false, false),
    'andreypohelyuk@gmail.com' => new PermissionSet(false, false, false, false),
    'jasonblissett7@gmail.com' => new PermissionSet(false, false, false, false),
    'fanglas@gmail.com' => new PermissionSet(false, false, false, false),
    'xena074@gmail.com' => new PermissionSet(false, false, false, false),
    'donete@outlook.com' => new PermissionSet(false, false, false, false),
    'jaza138@yahoo.com' => new PermissionSet(false, false, false, false),
    'yousefghazal68@gmail.com' => new PermissionSet(false, false, false, false),
    'hammoud_k@hotmail.com' => new PermissionSet(false, false, false, false),
    'olwethu.installation@gmail.com' => new PermissionSet(false, false, false, false),
    'donizetti.martins@gmail.com' => new PermissionSet(false, false, false, false),
    'clctrader@hotmail.com' => new PermissionSet(false, false, false, false),
    'Robinkc6@kpnmail.nl' => new PermissionSet(false, false, false, false),
    'napewnoniepsy2@gmail.com' => new PermissionSet(false, false, false, false),
    'mabonaa@icloud.com' => new PermissionSet(false, false, false, false),
    'oleg.danilov.1984@mail.ru' => new PermissionSet(false, false, false, false),
    'remi.ba@gmail.com' => new PermissionSet(false, false, false, false),
    'medyouch@gmail.com' => new PermissionSet(false, false, false, false),
    'pmn7612@gmail.com' => new PermissionSet(false, false, false, false),
    'diamondco.doo@gmail.com' => new PermissionSet(false, false, false, false),
    'ban.1396@hotmail.com' => new PermissionSet(false, false, false, false),
    'lex7k@ukr.net' => new PermissionSet(false, false, false, false),
    'erwin1608@gmail.com' => new PermissionSet(false, false, false, false),
    'frank.squire@yahoo.com' => new PermissionSet(false, false, false, false),
    'rhfckfu@mail.ru' => new PermissionSet(false, false, false, false),
    'Jasam18@yahoo.es' => new PermissionSet(false, false, false, false),
    'setiyomargono@yahoo.co.id' => new PermissionSet(false, false, false, false),
    'psandov@gmail.com' => new PermissionSet(false, false, false, false),
    'jakopovicdamirjd@gmail.com' => new PermissionSet(false, false, false, false),
    'fabiocherubini10@gmail.com' => new PermissionSet(false, false, false, false),
    'assadazam@gmail.com' => new PermissionSet(false, false, false, false),
    'rangika_14@live.com' => new PermissionSet(false, false, false, false),
    'mixomabasa@yahoo.com' => new PermissionSet(false, false, false, false),
    'franfxup@gmail.com' => new PermissionSet(false, false, false, false),
    'folklarry@sbcglobal.net' => new PermissionSet(false, false, false, false),
    'batuakik050@gmail.com' => new PermissionSet(false, false, false, false),
    'fisnik-96@hotmail.com' => new PermissionSet(false, false, false, false),
    'lovalova69@gmail.com' => new PermissionSet(false, false, false, false),
    'Adeniyiabraham0@gmail.com' => new PermissionSet(false, false, false, false),
    'vaskin1195@gmail.com' => new PermissionSet(false, false, false, false),
    'taedon82@gmail.com' => new PermissionSet(false, false, false, false),
    'yusuf_55_c@hotmail.com' => new PermissionSet(false, false, false, false),
    'turguy.muharrem@gmail.com' => new PermissionSet(false, false, false, false),
    'pauloedub@icloud.com' => new PermissionSet(false, false, false, false),
    'sniffski@gmail.com' => new PermissionSet(false, false, false, false),
    'chrisg@gomarkets.com' => new PermissionSet(false, false, false, false),
    'dmkov77@gmail.com' => new PermissionSet(false, false, false, false),
    'chijiokehenry16@yahoo.com' => new PermissionSet(false, false, false, false),
    'iksanjanuardi@gmail.com' => new PermissionSet(false, false, false, false),
    'modul.br31@gmail.com' => new PermissionSet(false, false, false, false),
    'mmrahim@yahoo.com' => new PermissionSet(false, false, false, false),
    'brainlovesheart@gmail.com' => new PermissionSet(false, false, false, false),
    'kbaptiste.kb@gmail.com' => new PermissionSet(false, false, false, false),
    'gognadze82@mail.ru' => new PermissionSet(false, false, false, false),
    'montrichunpho@gmail.com' => new PermissionSet(false, false, false, false),
    'raul@cruzmunoz.es' => new PermissionSet(false, false, false, false),
    'jasame18@yahoo.es' => new PermissionSet(false, false, false, false),
    'jorgegranadaforex@gmail.com' => new PermissionSet(false, false, false, false),
    'zoran.jakovljevic@telekom.rs' => new PermissionSet(false, false, false, false),
    'rtspurvi@gmail.com' => new PermissionSet(false, false, false, false),
    'hkhoory1@hotmail.com' => new PermissionSet(false, false, false, false),
    'deripasco@gmail.com' => new PermissionSet(false, false, false, false),
    'nnajihod2000@yahoo.com' => new PermissionSet(false, false, false, false),
    'grigoriymolkin@mail.ru' => new PermissionSet(false, false, false, false),
    'gbrygel@gmail.com' => new PermissionSet(false, false, false, false),
    'andryushenka.vasilev.1974@mail.ru' => new PermissionSet(false, false, false, false),
    'stymtc@hotmail.com' => new PermissionSet(false, false, false, false),
    'signalsfx7@gmail.com' => new PermissionSet(false, false, false, false),
    'a7mad-fx@hotmail.com' => new PermissionSet(false, false, false, false),
    'jmhopkins_plymouth@yahoo.com' => new PermissionSet(false, false, false, false),
    'tmauri@gmail.com' => new PermissionSet(false, false, false, false),
    'paoloamenta@icloud.com' => new PermissionSet(false, false, false, false),
    'garayar@gmail.com' => new PermissionSet(false, false, false, false),
    'rizarohman88@gmail.com' => new PermissionSet(false, false, false, false),
    'ditthipadma@gmail.com' => new PermissionSet(false, false, false, false),
    'oshmd@yahoo.com' => new PermissionSet(false, false, false, false),
    'drustiawan66@gmail.com' => new PermissionSet(false, false, false, false),
    'harold.md@gmail.com' => new PermissionSet(false, false, false, false),
    'forexotti@gmail.com' => new PermissionSet(false, false, false, false),
    'poddielskii79@mail.ru' => new PermissionSet(false, false, false, false),
    'dadangrustiawan1@gmail.com' => new PermissionSet(false, false, false, false),
    'yusmizan80@gmail.com' => new PermissionSet(false, false, false, false),
    'aliahmad32365@gmail.com' => new PermissionSet(false, false, false, false),
    'Maliksalmanali52@gmail.com' => new PermissionSet(false, false, false, false),
    'dsdslavov955@gmail.com' => new PermissionSet(false, false, false, false),
    'dcloete223@gmail.com' => new PermissionSet(false, false, false, false),
    'tommy24gustama@gmail.com' => new PermissionSet(false, false, false, false),
    'jonimar1900@gmail.com' => new PermissionSet(false, false, false, false),
    'kivandanu@gmail.com' => new PermissionSet(false, false, false, false),
    'theo.laksana99@gmail.com' => new PermissionSet(false, false, false, false),
    'ssa.mhd@gmail.com' => new PermissionSet(false, false, false, false),
    'hendrotpi@gmail.com' => new PermissionSet(false, false, false, false),
    'bsl-18@yandex.ru' => new PermissionSet(false, false, false, false),
    'mohammed.tayser94@gmail.com' => new PermissionSet(false, false, false, false),
    'kaduadu@gmail.com' => new PermissionSet(false, false, false, false),
    'hendraputratito@gmail.com' => new PermissionSet(false, false, false, false),
    'olatoye.stephen@gmail.com' => new PermissionSet(false, false, false, false),
    'pixeluon@gmail.com' => new PermissionSet(false, false, false, false),
    'dmandere82@gmail.com' => new PermissionSet(false, false, false, false),
    'narnos04@hotmail.com' => new PermissionSet(false, false, false, false),
    'gmphomatumba@gmail.com' => new PermissionSet(false, false, false, false),
    'mercyvillaplaza@gmail.com' => new PermissionSet(false, false, false, false),
    'sergo58@mail.ru' => new PermissionSet(false, false, false, false),
    'adiemzs@gmail.com' => new PermissionSet(false, false, false, false),
    'canaveral@bk.ru' => new PermissionSet(false, false, false, false),
    'atc.traderfx@gmail.com' => new PermissionSet(false, false, false, false),
    'otmanbarbaro@gmail.com' => new PermissionSet(false, false, false, false),
    'dsuri@telus.net' => new PermissionSet(false, false, false, false),
    'sndycouple@gmail.com' => new PermissionSet(false, false, false, false),
    'prinsjosua5@gmail.com' => new PermissionSet(false, false, false, false),
    'ra_diansyah@yahoo.com' => new PermissionSet(false, false, false, false),
    'jaibelzea@hotmail.com' => new PermissionSet(false, false, false, false),
    'wayne.cawood@gmail.com' => new PermissionSet(false, false, false, false),
    'Mixail.stadnik.80@mail.ru' => new PermissionSet(false, false, false, false),
    'valley.cjc@gmail.com' => new PermissionSet(false, false, false, false),
    'vusim1788@outlook.com' => new PermissionSet(false, false, false, false),
    'danatarovserdar@gmail.com' => new PermissionSet(false, false, false, false),
    'eirsyad81@gmail.com' => new PermissionSet(false, false, false, false),
    'patmut102@gmail.com' => new PermissionSet(false, false, false, false),
    'mrgolubev@mail.ru' => new PermissionSet(false, false, false, false),
    'marsha.madzhie@yahoo.com' => new PermissionSet(false, false, false, false),
    'blagowalery@mail.ru' => new PermissionSet(false, false, false, false),
    'miibra2000@yahoo.com' => new PermissionSet(false, false, false, false),
    'mandengui@outlook.com' => new PermissionSet(false, false, false, false),
    'virgis.stalgenai@gmail.com' => new PermissionSet(false, false, false, false),
    'zulct2001@yahoo.com' => new PermissionSet(false, false, false, false),
    'munttari2000@gmail.com' => new PermissionSet(false, false, false, false),
    'therealforextrader@gmail.com' => new PermissionSet(false, false, false, false),
    'adetyinka@gmail.com' => new PermissionSet(false, false, false, false),
    'stevekandio@yahoo.co.id' => new PermissionSet(false, false, false, false),
    'nemis284@mail.ru' => new PermissionSet(false, false, false, false),
    'fxardi@yahoo.com' => new PermissionSet(false, false, false, false),
    'dori.tegal@gmail.com' => new PermissionSet(false, false, false, false),
    'budi.pertama@yahoo.co.id' => new PermissionSet(false, false, false, false),
    'abdulshaheedabdul@gmail.com' => new PermissionSet(false, false, false, false),
    'nikolai.surkov@mail.ru' => new PermissionSet(false, false, false, false),
    'Grommi.88@mail.ru' => new PermissionSet(false, false, false, false),
    'rajaram.muruganantham@gmail.com' => new PermissionSet(false, false, false, false),
    'apparel.my@gmail.com' => new PermissionSet(false, false, false, false),
    'saidmukhlis72@gmail.com' => new PermissionSet(false, false, false, false),
    'almubarok140915@gmail.com' => new PermissionSet(false, false, false, false),
    'allatiframadhani.said@gmail.com' => new PermissionSet(false, false, false, false),
    'puma140@mail.ru' => new PermissionSet(false, false, false, false),
    'arry11utama@gmail.com' => new PermissionSet(false, false, false, false),
    'perlob@gmx.at' => new PermissionSet(false, false, false, false),
    'arman.pda@gmail.com' => new PermissionSet(false, false, false, false),
    'wladimir.prado@gmail.com' => new PermissionSet(false, false, false, false),
    'muzaffartoj@mail.ru' => new PermissionSet(false, false, false, false),
    'exsnowhound@Outlook.com' => new PermissionSet(false, false, false, false),
    'antonov.cemka@gmail.com' => new PermissionSet(false, false, false, false),
    'gia11978@mail.com' => new PermissionSet(false, false, false, false),
    'phuongvupc@gmail.com' => new PermissionSet(false, false, false, false),
    'ndzolongqovu@gmail.com' => new PermissionSet(false, false, false, false),
    'bekok1968@gmail.com' => new PermissionSet(false, false, false, false),
    'mic.isaacs@gmail.com' => new PermissionSet(false, false, false, false),
    'nvi_68@mail.ru' => new PermissionSet(false, false, false, false),
    'andreipopov182@mail.ru' => new PermissionSet(false, false, false, false),
    'ferdinandaja@gmail.com' => new PermissionSet(false, false, false, false),
    'Naufalzakariyya@yahoo.com' => new PermissionSet(false, false, false, false),
    'yoyokjkt83@gmail.com' => new PermissionSet(false, false, false, false),
    'nadnnad12@yahoo.com' => new PermissionSet(false, false, false, false),
    'thomad.ariston@gmail.com' => new PermissionSet(false, false, false, false),
    'lbonilla0471@gmail.com' => new PermissionSet(false, false, false, false),
    'sunmolago@yahoo.com' => new PermissionSet(false, false, false, false),
    'benisonalvarez@yahoo.com' => new PermissionSet(false, false, false, false),
    'dominic.dalo@bigpond.com' => new PermissionSet(false, false, false, false),
    'serikzsn@mail.ru' => new PermissionSet(false, false, false, false),
    'hiposmart@gmail.com' => new PermissionSet(false, false, false, false),
    'smartherry69@gmail.com' => new PermissionSet(false, false, false, false),
    'thomas.ariston@gmail.com' => new PermissionSet(false, false, false, false),
    'pronitsyn@mail.ru' => new PermissionSet(false, false, false, false),
    'Lettlevin@yahoo.com' => new PermissionSet(false, false, false, false),
    'omarego@yahoo.es' => new PermissionSet(false, false, false, false),
    'essawe@gmail.com' => new PermissionSet(false, false, false, false),
    'aminenadiri@hotmail.com' => new PermissionSet(false, false, false, false),
    '007xzx@mail.ru' => new PermissionSet(false, false, false, false),
    'kadiri20end@gmail.com' => new PermissionSet(false, false, false, false),
    'ennarjess@hotmail.com' => new PermissionSet(false, false, false, false),
    'Yvette@autochartist.com' => new PermissionSet(false, false, false, false),
    'pearltravelalex@yahoo.com' => new PermissionSet(false, false, false, false),
    'rohmantototo8@gmail.com' => new PermissionSet(false, false, false, false),
    'buxip@bk.ru' => new PermissionSet(false, false, false, false),
    'braim.supi@yahoo.com.my' => new PermissionSet(false, false, false, false),
    'pav@vip.bg' => new PermissionSet(false, false, false, false),
    'david_massaez@yahoo.es' => new PermissionSet(false, false, false, false),
    'ismail.negara@gmail.com' => new PermissionSet(false, false, false, false),
    'jandroanghy@gmail.com' => new PermissionSet(false, false, false, false),
    'convallemarco@gmail.com' => new PermissionSet(false, false, false, false),
    'pkostyukov@mail.ru' => new PermissionSet(false, false, false, false),
    'evgenikoval10@gmail.com' => new PermissionSet(false, false, false, false),
    'artemka45@rambler.ru' => new PermissionSet(false, false, false, false),
    'antpush3@gmail.com' => new PermissionSet(false, false, false, false),
    'nnolt22@gmail.com' => new PermissionSet(false, false, false, false),
    'fmlbfx@finanacier.com' => new PermissionSet(false, false, false, false),
    'lenniks@bk.ru' => new PermissionSet(false, false, false, false),
    'dion_dallas@yahoo.com' => new PermissionSet(false, false, false, false),
    'stargazer18121969@gmail.com' => new PermissionSet(false, false, false, false),
    'axel@delfi.lt' => new PermissionSet(false, false, false, false),
    'got2@wp.pl' => new PermissionSet(false, false, false, false),
    'musik.ok@mail.ru' => new PermissionSet(false, false, false, false),
    'rosatialessandro83@gmail.com' => new PermissionSet(false, false, false, false),
    'nikola.duic@gmail.com' => new PermissionSet(false, false, false, false),
    'jquack4581@gmail.com' => new PermissionSet(false, false, false, false),
    'test5@seertrading.com' => new PermissionSet(false, false, false, false),
    'pay-bank@bk.ru' => new PermissionSet(false, false, false, false),
    'mesutocak@hotmail.de' => new PermissionSet(false, false, false, false),
    'evtyukova@gmail.com' => new PermissionSet(false, false, false, false),
    'husainihuss00@gmail.com' => new PermissionSet(false, false, false, false),
    'sudesh.wasm@gmail.com' => new PermissionSet(false, false, false, false),
    'okome.majemite@gmail.com' => new PermissionSet(false, false, false, false),
    'test7@seertrading.com' => new PermissionSet(false, false, false, false),
    'ahmad80@hotmail.com' => new PermissionSet(false, false, false, false),
    'tradea697@gmail.com' => new PermissionSet(false, false, false, false),
    'ajayca9@gmail.com' => new PermissionSet(false, false, false, false),
    'guerini.domenico@gmail.com' => new PermissionSet(false, false, false, false),
    'romanzevnik@gmail.com' => new PermissionSet(false, false, false, false),
    'dubejabulani16@gmail.com' => new PermissionSet(false, false, false, false),
    'dobrenkij74@gmail.com' => new PermissionSet(false, false, false, false),
    'ass.prihatin@gmail.com' => new PermissionSet(false, false, false, false),
    'vlytvynenko@i.ua' => new PermissionSet(false, false, false, false),
    'yaser_musa2003@yahoo.com' => new PermissionSet(false, false, false, false),
    'patihmada07@gmail.com' => new PermissionSet(false, false, false, false),
    'jvinlim@gmail.com' => new PermissionSet(false, false, false, false),
    'test78@seertrading.com' => new PermissionSet(false, false, false, false),
    'farshidtapesh16@gmail.com' => new PermissionSet(false, false, false, false),
    'imran_sthlm@hotmail.com' => new PermissionSet(false, false, false, false),
    'tino.funk@yahoo.de' => new PermissionSet(false, false, false, false),
    'mendoncapraveena2@gmail.com' => new PermissionSet(false, false, false, false),
    'jcmorales0103@gmail.com' => new PermissionSet(false, false, false, false),
    '90tabcon@gmail.com' => new PermissionSet(false, false, false, false),
    'oldanfil@gmail.com' => new PermissionSet(false, false, false, false),
    'mirzaeimostafa74@gmail.com' => new PermissionSet(false, false, false, false));

$dataSourceRecordPermissions = array();

$tableCaptions = array('execution_per_type' => 'Execution PerAccount Type',
'execution_per_hod' => 'Execution Per Hod',
'execution_per_symbol' => 'Execution Per Symbol');

$usersTableInfo = array(
    'TableName' => 'public.users',
    'UserId' => 'id',
    'UserName' => 'email',
    'Password' => 'password',
    'Email' => 'email',
    'UserToken' => 'phpgen_token',
    'UserStatus' => 'phpgen_status'
);

function EncryptPassword($password, &$result)
{

}

function VerifyPassword($enteredPassword, $encryptedPassword, &$result)
{

}

function BeforeUserRegistration($userName, $email, $password, &$allowRegistration, &$errorMessage)
{

}    

function AfterUserRegistration($userName, $email)
{

}    

function PasswordResetRequest($userName, $email)
{

}

function PasswordResetComplete($userName, $email)
{

}

function VerifyPasswordStrength($password, &$result, &$passwordRuleMessage) 
{

}

function CreatePasswordHasher()
{
    $hasher = CreateHasher('Crypt');
    if ($hasher instanceof CustomStringHasher) {
        $hasher->OnEncryptPassword->AddListener('EncryptPassword');
        $hasher->OnVerifyPassword->AddListener('VerifyPassword');
    }
    return $hasher;
}

function CreateGrantManager() 
{
    global $grants;
    global $appGrants;
    
    return new HardCodedUserGrantManager($grants, $appGrants);
}

function CreateTableBasedUserManager() 
{
    global $usersTableInfo;

    $userManager = new TableBasedUserManager(PgConnectionFactory::getInstance(), GetGlobalConnectionOptions(), 
        $usersTableInfo, CreatePasswordHasher(), true);
    $userManager->OnVerifyPasswordStrength->AddListener('VerifyPasswordStrength');

    return $userManager;
}

function GetReCaptcha($formId) 
{
    return null;
}

function SetUpUserAuthorization() 
{
    global $dataSourceRecordPermissions;

    $hasher = CreatePasswordHasher();

    $grantManager = CreateGrantManager();

    $userAuthentication = new TableBasedUserAuthentication(new UserIdentitySessionStorage(), false, $hasher, CreateTableBasedUserManager(), true, false, true);

    GetApplication()->SetUserAuthentication($userAuthentication);
    GetApplication()->SetUserGrantManager($grantManager);
    GetApplication()->SetDataSourceRecordPermissionRetrieveStrategy(new HardCodedDataSourceRecordPermissionRetrieveStrategy($dataSourceRecordPermissions));
}
