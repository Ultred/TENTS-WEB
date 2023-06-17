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
    <title>Categories</title>
  </head>
  <body>
    <?php include 'component/sidebar.php'; ?>
    <section id="section-all" class="section-all">
      <div class="sectionall-flex">
        <h1 class="title1">Categories</h1>
        <i class="fa-solid fa-user profile"></i>
      </div>
      <p class="paragraph1">Select first the category to create event.</p>
      <div class="sectionall-box">
        <a href=""><img src="images/dance.png" alt="" /></a>
        <a href="Tents-Events.php"> <img src="images/pageant.png" alt="" /></a>
      </div>
      <p class="paragraph1"><br />Here you can create your own category.</p>
      <form action="">
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
            <input type="text"  class="input-field1" required />
            <label class="label-text">Category Name</label>
          </div>

          <input type="submit" class="buttongreen" value="Create" />
        </div>
      </form>
      <div class="table-content">
        <table>
          <thead>
            <th class="paragraph1">ID</th>
            <th class="paragraph1">Photo</th>
            <th class="paragraph1">Category Name</th>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </section>
    <script src="js/sidebar.js"></script>
  </body>
</html>
