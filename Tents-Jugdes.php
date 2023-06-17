<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="css/categories.css" />
    <title>Judges</title>
  </head>
  <body>
    <?php include 'component/sidebar.php'; ?>
    <section id="section-all" class="section-all">
      <div class="sectionall-flex">
        <h1 class="title1">Name | Judges</h1>
        <i class="fa-solid fa-user profile"></i>
      </div>
      <p class="paragraph1">
        For adding judges kindly invite them using their email.
      </p>

      <div class="sectionall-flex">
        <div class="flex">
          <div class="flex1">
            <p>1</p>
            <i class="fa-solid fa-caret-down"></i>
          </div>
          <div class="input-data">
            <input type="email" class="input-field1" required />
            <label class="label-text">Email</label>
          </div>

          <input type="submit" class="buttongreen" value="Send Invitation" />
        </div>
        <input type="submit" class="buttonmink" value="Clear" />
      </div>
    </section>
    <script src="js/sidebar.js"></script>
  </body>
</html>
