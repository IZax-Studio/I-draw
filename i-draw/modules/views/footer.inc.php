<!-- ==================Go to top btn================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" >var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow27.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>
<noscript>Not seeing a <a href="https://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

<script src="http://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>

<script>
// ================================================================================================Menu Top -->
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "0px";
  }
}
// ================================================================================================Menu Left -->
window.onscroll = function() {scrollFunctionLeft()};

function scrollFunctionLeft() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar-left").style.left = "0";
  } else {
    document.getElementById("navbar-left").style.left = "0px";
  }
}
// ================================================================================================Show Image -->
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

<!-- ================================================================================================Public chat -->

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	setInterval(function(){
		$("#public_chat").load('views/public_chat.php')
    }, 2000);
});
// ====================================================================================================loading -->
// function onReady(callback) {
//   var intervalId = window.setInterval(function() {
//     if (document.getElementsByTagName('body')[0] != undefined) {
//       window.clearInterval(intervalId);
//       callback.call(this);
//     }
//   }, 1000);
// }

// function setVisible(selector, visible) {
//   document.querySelector(selector).style.display = visible ? 'block' : 'none';
// }

// onReady(function() {
//   setVisible('.page', true);
//   setVisible('#loading', false);
// });
// ====================================================================================================back button -->
function btn_back() {
  window.history.back();
}
// ====================================================================================================refresh button -->
function btn_refresh() {
  location.reload();
}
// ====================================================================================================key count -->
$('#count_key').keyup(function () {
  var characterCount = $(this).val().length,
  current = $('#current_count_key'),
  maximum = $('#maximum_count_key'),
  theCount = $('#the-count_count_key');
  var maxlength = $(this).attr('maxlength');
  var changeColor = 0.75 * maxlength;
  current.text(characterCount);

  if (characterCount > changeColor && characterCount < maxlength) {
    current.css('color', '#FF4500');
    current.css('fontWeight', 'bold');
  }
  else if (characterCount >= maxlength) {
    current.css('color', '#B22222');
    current.css('fontWeight', 'bold');
  }
  else {
    var col = maximum.css('color');
    var fontW = maximum.css('fontWeight');
    current.css('color', col);
    current.css('fontWeight', fontW);
  }
});
</script>
