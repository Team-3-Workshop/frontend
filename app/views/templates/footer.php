</div>
</div>
<footer class="d-flex justify-content-end p-2 bg-primary fixed-bottom" style="height: 50px;">
      <strong class="align-self-center text-light me-2 fs-">Presented by : </strong>
      <img src="<?= BASEURL; ?>/images/logo/Polije.png" alt="Logo Polije" class="img-fluid mx-2">
      <img src="<?= BASEURL; ?>/images/logo/JTI.png" alt="Logo JTI" class="img-fluid mx-2">
</footer>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/js/app.js"></script>

<!-- Need: Apexcharts -->
<script src="<?= BASEURL; ?>/extensions/apexcharts/apexcharts.min.js"></script>
<script src="<?= BASEURL; ?>/js/pages/dashboard.js"></script>


<script>
      ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                  console.error(error);
            });
</script>
</body>

</html>