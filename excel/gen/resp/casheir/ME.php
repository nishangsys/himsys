

<script>
$("a").click(function(){
  var myhref = $(this).attr('href');
  $('#content').load(myhref);
  return false;
});
</script>
<a href="page2.html">Load page2.html</a>
<div id="content">Hello world!</div>

<a href="#" data-url="page2.html" class="topic-list-item">

  <h3 class="topic-title">Internet Protocol Basics</h3>

  <div class="topic-description-text">
    Learn how Internet Protocol is used
  </div>
</a>