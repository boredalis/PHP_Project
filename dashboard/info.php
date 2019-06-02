<?php
include('../components/header.php');
class Info{
  var $information;
  var $color;
  var $fontsize;

  public function __construct($information,$color,$fontsize)
  {
    $this->information=$information;
    $this->color=$color;
    $this->fontsize=$fontsize;
  }
}
?>
<head>
    <title>Info</title>
</head>
<body>
<div class="homepage">
<div class="background">
<h1 style="text-align: center; color: #888D8A; font-family: Pretty"> About us </h1>
<?php  
$string="Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Vivamus sagittis metus libero, sit amet hendrerit urna egestas id.
 Fusce pulvinar tempus efficitur. Sed vel sodales lectus. 
 In hac habitasse platea dictumst. Morbi eget felis nec mi varius blandit.
  Quisque non risus et quam aliquam iaculis eget et est.
   Donec nisl eros, sagittis id viverra sed, suscipit ac dui.
    Sed accumsan vulputate eros eget vestibulum.
     Aenean scelerisque orci in velit sagittis pretium.
      Duis malesuada faucibus justo, et vestibulum ex finibus nec.
       Nunc lacinia volutpat vestibulum.
        Curabitur sollicitudin, risus et semper ullamcorper, metus lectus placerat tellus,
         et vestibulum dui odio nec leo.";
$multi = array( array("#888D8A","#BDC2BF","#D2DED7"),array(25,20,15));
$info =  new Info($string, $multi[0][0],$multi[1][0]);
$info2= new Info($string,$multi[0][1],$multi[1][1]);
$info3 = new Info($string,$multi[0][2],$multi[1][2]);
         echo "<p style=\"color:$info->color\">".$info->information;
         echo "<p style=\"color:$info2->color\">".$info2->information;
         echo "<p style=\"color:$info3->color\">".$info3->information;

?>
</div>

</div>
</body>

<?php include('../components/footer.php')  ?>
<style>
html,body{
  height: 100%;
  box-sizing: border-box;
  background-color: #fafafa;
}  
.homepage{
  padding: 20px 100px;
  min-height: 70%;
} 
.background{
    padding: 20px 100px;
    margin: 20px;
    background-color: #D8F3E2;
}
@font-face{
	font-family: "Pretty";
    src: url("magic.woff") format("woff");     
}
    </style>