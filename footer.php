<?php
/**
* Footer Template
*
* @package _ballistix
*/ ?>
        </div>

      </main>

      <footer id="site-footer" role="contentinfo">

        <div class="container">

          <?php if (is_active_sidebar('widget-footer')): ?>

            <aside id="widget-footer" role="complementary">

              <?php dynamic_sidebar('widget-footer'); ?>

            </aside>

          <?php endif; ?>

        </div>

      </footer>

    </div>

    <?php wp_footer(); ?>

  </body>

</html>
