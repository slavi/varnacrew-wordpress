			<?php if ($post->post_name != "home") { ?>
            </div>
            <div class="shadow right"></div>
            <div class="shadow bottom"></div>
        </div>
		<?php } ?>
        <!-- / Carousel -->
    
    </div>
    <!-- CONTENT - End -->

    <!-- FOOTER - Start -->
    <div class="footer">

      <!-- Useful -->
      <h3>Useful</h3>

      <a href="javascript:;" title="See all" class="see-all">See all</a>

      <ul class="useful-list clearfix">
        <?php
        $resources = get_resources(true);

        if ($resources) {
          foreach ( $resources as $resource ) {
            echo "<li><a href='" . $resource["resource"] . "'>" . $resource["title"] . "</a></li>";
          }
          // "<td><img src='" . $resource["image"] . "'></td>" .
        }
        ?>
      </ul>


      <div class="copyrights clearfix">
        <p class="copy">&copy; 2005-2012<br />The Aleksander Foundation<br />All Rights Reserved.</p>
        <p class="accounts">BGN: BG94UNCR96601000046678<br />EURO: BG34UNCR96601417741204<br />BIC: UNCRBGSF</p>
        <a href="http://www.ilyan.com" title="design by: ilyan.com" target="_blank" class="created-by">design by: ilyan.com</a>
        <?php wp_footer(); ?>
      </div>

    </div>
  </div>
  <!-- FOOTER - End -->
	</body>
</html>
