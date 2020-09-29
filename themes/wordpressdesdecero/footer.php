<div class='container  bg-dark text-light border-top border-primary p-4'>
<!--  div.col-sm*3 en emmet creamos tres columnas para las tablets -sm -->
<div class='row'>
<div class="col-sm">
<?php dynamic_sidebar( 'widget-footer-1') ?>
</div>

<div class="col-sm">
<?php dynamic_sidebar( 'widget-footer-1') ?>
</div>

<div class="col-sm">
<?php dynamic_sidebar( 'widget-footer-1') ?>
</div>

</div>
</div>

<?php dynamic_sidebar( 'widget-footer-1' ); ?>
<footer class='container'>





  <p>&copy; Company 2017-2020 </p>


<?php wp_nav_menu( array( 'footer' => 'footer-menu' ) ); 
?>

<?php wp_footer() ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script></body>


      </footer>

</html>
