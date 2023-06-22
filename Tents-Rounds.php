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
    <title>Rounds</title>
  </head>
  <body>
    <?php include 'component/sidebar.php'; ?>
    <section id="section-all" class="section-all">
      <form action="">
      <div class="sectionall-flex">
        <h1 class="title1">Name | Rounds</h1>
        <i class="fa-solid fa-user profile"></i>
      </div>
      <p class="paragraph1">
        Add here the rounds for the event.
      </p>

      <div class="sectionall-flex">
        <div class="flex">
          <div class="flex1">
            <p>1</p>
            <i class="fa-solid fa-caret-down"></i>
          </div>
          <div class="input-data">
            <input type="text" class="input-field input-width3" required />
            <label class="label-text">Round Name</label>
          </div>
          <div class="input-data">
            <input class="input-field1" type="text" required />
            <label class="label-text">Description</label>
          </div>

          <input type="submit" class="buttongreen" value="Add" />
        </div>
        <input type="submit" class="buttonmink" value="Clear" />
      </div>
      </form>
    </section>
    <script src="js/sidebar.js"></script>
  </body>
</html>
