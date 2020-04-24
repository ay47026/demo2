      <footer>
        <?php
        echo isset($_SESSION['script_loadtime']) ? 'Page loads in ' . $_SESSION['script_loadtime'] : $logger->get_error_logger(extract_short_path(__FILE__), 'Script load time NOT found ' .' on '.date("j F Y, g:i:s A") . ' on line '. __LINE__);

         include(SHARED_PATH . '/public_copyright_disclaimer.php'); ?>
      </footer>

  </body>
</html>

<?php
db_disconnect($database);
?>
