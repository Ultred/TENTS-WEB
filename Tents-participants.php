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
        <h1 class="title1">Name | Participants</h1>
        <i class="fa-solid fa-user profile"></i>
      </div>
      <p class="paragraph1">
        Add here the participants for this event.
      </p>

      <div class="sectionall-flex">
        <div class="flex">
          <div class="flex1">
            <p>1</p>
            <i class="fa-solid fa-caret-down"></i>
          </div>
          <div>
            <input type="file" id="upload-button" />
            <label for="upload-button" class="label"
              ><i class="fa-solid fa-camera"> </i>&nbsp; Upload</label
            >
          </div>
          <div class="input-data">
            <input class="input-field input-width" type="text" required />
            <label class="label-text">First Name</label>
          </div>
          <div class="input-data">
            <input class="input-field input-width" type="text" required />
            <label class="label-text">Last Name</label>
          </div>
          <div class="input-data">
            <input class="input-field input-width1" type="number" required />
            <label class="label-text">Age</label>
          </div>
          <div class="input-data">
            <select name="gender" class="input-field input-width2"  id="mySelect">
              <option disabled selected>Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <div class="input-data">
            <input class="input-field input-width3" type="text" required />
            <label class="label-text">Organization </label>
          </div>

          <input type="submit" class="buttongreen" value="Add" />
        </div>
        <input type="submit" class="buttonmink" value="Clear" />
      </div>
    </section>
    <script src="js/sidebar.js"></script>
  </body>
</html>
