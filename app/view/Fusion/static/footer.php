<!-- ========== Start Scroll To Top ========== -->

<a href="#" class="scroll-top">
    <span><i class="fa fa-arrow-up"></i></span>
</a>

<!-- ========== End Scroll To Top ========== -->

<!-- ========== Start Footer ========== -->

<div class="footer text-center">
    <div class="footer-info">
        <div class="container">
            <p class="copyright">
                copyright &copy; <?= date('Y') ?> <?= htmlspecialchars_decode(setting('copyright_text')) ?>
            </p>
            <div class="textwidget custom-html-widget">
                <ul class="social-icons-menu list-unstyled">
                    <?php if ($fb = setting('facebook')): ?>
                        <li><a href="https://facebook.com/<?= $fb; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <?php endif; ?>
                    <?php if ($tw = setting('twitter')): ?>
                        <li><a href="https://twitter.com/<?= $tw; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <?php endif; ?>
                    <?php if ($ins = setting('instagram')): ?>
                        <li><a href="https://instagram.com/<?= $ins; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <?php endif; ?>
                    <?php if ($in = setting('linkedin')): ?>
                        <li><a href="https://linkedin.com/in/<?= $in; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <?php endif; ?>
                    <?php if ($gh = setting('github')): ?>
                        <li><a href="https://github.com/<?= $gh; ?>" target="_blank"><i class="fa fa-github"></i></a></li>
                    <?php endif; ?>
                    <?php if ($yt = setting('youtube')): ?>
                        <li><a href="https://youtube.com/<?= $yt?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- ========== End Footer ========== -->

<!-- ========== Js ========== -->

<!-- jQuery -->
<script src="<?= public_url('js/jquery-3.2.1.min.js'); ?>"></script>
<!-- Bootstrap Js -->
<script src="<?= public_url('js/bootstrap.min.js'); ?>"></script>
<!-- Slick Js -->
<script src="<?= public_url('js/slick.min.js'); ?>"></script>
<!-- Main Js -->
<script src="<?= public_url('js/main.js'); ?>"></script>
</body>
</html>