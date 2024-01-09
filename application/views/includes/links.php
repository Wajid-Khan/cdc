<!-- favicon -->
<link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/images/apple-touch-icon.png">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/fav.png">

<!-- bootstrap v4 css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
<!-- Hover CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/hover-min.css">
<!-- font-awesome css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
<!-- animate css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.css">
<!-- owl.carousel css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
<!-- slick css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/slick.css">
<!-- magnific popup css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
<!-- flaticon css  -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/flaticon.css">
<!-- rsmenu CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/rsmenu-main.css">
<!-- rsmenu transitions CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/rsmenu-transitions.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
<!-- responsive css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.css">
<style>
.services-bg {
  background: url(<?php echo base_url() ?>assets/images/bg/services-bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
.services-bg2 {
  background: url(<?php echo base_url() ?>assets/images/bg/services-bg2.jpg);
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}
.class-bg {
  background: url(<?php echo base_url() ?>assets/images/bg/class-bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
/*Counter Background */
.counter-bg {
  position: relative;
  background: #92278f;
  z-index: -1;
}
.counter-bg:before,
.counter-bg:after {
  content: '';
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  background: url(<?php echo base_url() ?>assets/images/counter/count-left.png);
  background-repeat: no-repeat;
  background-position: left center;
  height: 100%;
  width: 100%;
  z-index: -1;
}
.counter-bg:after {
  left: unset;
  right: 0;
  background: url(<?php echo base_url() ?>assets/images/counter/count-right.png);
  background-repeat: no-repeat;
  background-position: right center;
}
.counter-bg2 {
  background: url(<?php echo base_url() ?>assets/images/bg/counter-bg2.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
/*Team Background*/
.team-bg {
  background: url(<?php echo base_url() ?>assets/images/bg/team-bg.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
  background-size: cover;
}
.team-bg2 {
  background: url(<?php echo base_url() ?>assets/images/bg/team-bg2.jpg);
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}
/*Events Background*/
.events-bg {
  background: url(<?php echo base_url() ?>assets/images/bg/team-bg.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
  background-size: cover;
}
/*Footer Background*/
.footer-bg {
  background: url(<?php echo base_url() ?>assets/images/bg/footer-bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}
.footer-bg2 {
  background: url(<?php echo base_url() ?>assets/images/bg/footer-bg-2.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center bottom;
  padding-bottom: 70px;
}
.h-sidebar .h-caterories ul li.active a{
  color: #fe6500;
  font-weight: 500;
}
.h-desc ul{
  list-style-type: disc;
  padding-left: 30px;
}
.h-caterories .contact_parent1, .h-caterories .contact_parent2, .h-caterories .contact_parent3{
  display:grid;
  grid-template-columns: 7% 80%;
  margin-bottom: 10px;
}
.h-caterories .contact_parent1 i, .h-caterories .contact_parent2 i, .h-caterories .contact_parent3 i{
  position: relative;
  top: 4px;
  color: #757575;
}
.h-caterories .contact_parent1 a, .h-caterories .contact_parent2 a, .h-caterories .contact_parent3 a{
  color:#000;
}
.h-caterories .contact_parent1 a:hover, .h-caterories .contact_parent2 a:hover, .h-caterories .contact_parent3 a:hover{
  color:#fe6500;
}
.h-caterories .contact_parent1 i{
  font-size: 20px;
}
.h-caterories .contact_parent2 i{
  font-size: 15px;
}
.h-caterories .contact_parent3 i{
  font-size: 15px;
}
@media (min-width:992px) {
  .logo-text
  {
    font-size: 50px;
    margin: 0px 0 15px 0;
    position: relative;
    top: 15px;
  }
  .logo-text2
  {
    font-size: 50px;
    margin: 16px 0 15px 0;
  }
}
@media (max-width:991.98px) {
  .logo-text
  {
    font-size: 50px;
    margin: 0 0 15px 0;
    position: relative;
    top: 8px;
  }
}
.logo-text2 {
    font-size: 30px;
    margin: 25px 0 15px 0;
}
.footer-contact-part p{
  line-height: 28px;
}
#rs-slider .slide-content .sliter-title-text .slider-title {
  font-size: 35px;
  line-height: 45px;
}
@media (min-width:768px) {
  .rs-breadcrumbs .breadcrumbs-content .title{
    width: 80% !important;
    margin: auto !important;
  }
}
</style>