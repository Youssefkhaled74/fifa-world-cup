<?php
if (isset($_POST['submit4'])) {
    $sort1 ="Sort the data by point";
    $sort2 ="Sort the data by point";
    $sort3 ="Sort the data by point";
    $sort4 ="Sort the data by point";
    $en_points = "9 Point";
    $us_points = "4 Point";
    $wa_points = "4 Point";
    $ir_points = "0 Point";
    $prob2 = "
        Group B - England vs. Iran: Winner England with 0.60 probability.<br>.
        Group B - United States vs. Wales: Draw.<br>.
        Group B - Wales vs. Iran: Winner Wales with 0.54 probability.<br>.
        Group B - England vs. United States: Winner England with 0.58 probability.<br>.
        Group B - Wales vs. England: Winner England with 0.60 probability.<br>.
        Group B - Iran vs. United States: Winner United States with 0.57 probability.<br>.";
    $qa_points = "0 Point";
    $ec_points = "6 Point";
    $se_points = "3 Point";
    $ne_points = "9 Point";
    $prob1 = " 
        Group A - Qatar vs. Ecuador: Winner Ecuador with 0.60 probability.<br>.
        Group A - Senegal vs. Netherlands: Winner Netherlands with 0.59 probability.<br>.
        Group A - Qatar vs. Senegal: Winner Senegal with 0.58 probability.<br>.
        Group A - Netherlands vs. Ecuador: Winner Netherlands with 0.66 probability.<br>.
        Group A - Ecuador vs. Senegal: Winner Ecuador with 0.53 probability.<br>.
        Group A - Netherlands vs. Qatar: Winner Netherlands with 0.69 probability.<br>.";



    $arg_points = "9 Point";
    $pol_points = "4 Point";
    $mex_points = "4 Point";
    $sau_points = "0 Point";
    $prob3 = "
Group C - Argentina vs. Saudi Arabia: Winner Argentina with 0.70 probability.<br>.
Group C - Mexico vs. Poland: Draw.<br>.
Group C - Poland vs. Saudi Arabia: Winner Poland with 0.64 probability.<br>.
Group C - Argentina vs. Mexico: Winner Argentina with 0.62 probability.<br>.
Group C - Poland vs. Argentina: Winner Argentina with 0.64 probability.<br>.
Group C - Saudi Arabia vs. Mexico: Winner Mexico with 0.64 probability.<br>.

";
$fra_points ="<b>7 point</b>";
$aus_points ="<b>1 point</b>";
$den_points ="<b>7 point</b>";
$tun_points ="<b>1 point</b>";
$prob4 ="Group D - Denmark vs. Tunisia: Winner Denmark with 0.63 probability.<br>.
Group D - France vs. Australia: Winner France with 0.65 probability.<br>.
Group D - Tunisia vs. Australia: Draw.<br>.
Group D - France vs. Denmark: Draw.<br>.
Group D - Australia vs. Denmark: Winner Denmark with 0.65 probability.<br>.
Group D - Tunisia vs. France: Winner France with 0.63 probability.<br>.";
setcookie ( "m_16_1" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
setcookie ( "m_16_2" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
setcookie ( "m_16_3" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
setcookie ( "m_16_4" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
setcookie ( "m_16_5" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
setcookie ( "m_16_6" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
setcookie ( "m_16_7" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
setcookie ( "m_16_8" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day


setcookie ( "m_8_1" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
setcookie ( "m_8_2" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
setcookie ( "m_8_3" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
setcookie ( "m_8_4" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day

setcookie ( "m_4_1" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
setcookie ( "m_4_2" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day

setcookie ( "m_2_1" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day



    include("simulator.php");
} else {
    $qa_points = Null;
    $ec_points = Null;
    $se_points = Null;
    $ne_points = Null;
}
