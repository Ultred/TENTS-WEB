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
    <title>Events</title>
  </head>
  <body>
    <?php include 'component/sidebar.php'; ?>
    <section id="section-all" class="section-all">
      <div class="sectionall-flex">
        <h1 class="title1">Categories | Pageant | Events</h1>
        <i class="fa-solid fa-user profile"></i>
      </div>
      <p class="paragraph1">Here you can create your own event.</p>
      <div class="section-grid">
        <div class="flex1">
          <p>1</p>
          <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="input-data">
          <input class="input-field" type="text" required />
          <label class="label-text">Event Name</label>
        </div>
        <div class="input-data">
          <input class="input-field" type="text" required />
          <label class="label-text">Venue</label>
        </div>
        <div class="folder-add-minus">
          <img src="images/icon-add.png" alt="" />
          <img src="images/icon-min.png" alt="" />
        </div>
        <div class="flex grid-1">
          <div class="input-data">
            <input
              type="text"
              id="datepicker1"
              value=""
              class="input-field"
              required
            /><i class="fas fa-calendar-check icon-calendar"></i
            ><label class="label-text">Start Date</label>
          </div>
          <div class="input-data">
            <input
              type="text"
              id="datepicker2"
              value=""
              class="input-field"
              required
            /><i class="fas fa-calendar-check icon-calendar"></i
            ><label class="label-text">End Date</label>
          </div>
        </div>
        <div class="flex grid-2">
          <div class="input-data">
            <input class="input-field" type="time" required />
            <label class="label-text label-text1">Start with</label>
          </div>
          <div class="input-data">
            <input
              class="input-field custom-time-input"
              type="time"
              placeholder=""
              va
              required
            />
            <label class="label-text label-text1">End with</label>
          </div>
        </div>
        <div class="input-data grid-descrip">
          <input class="input-field" type="text" required />
          <label class="label-text">Description</label>
        </div>
        <input type="submit" value="Create" class="buttongreen grid-3" />
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/sidebar.js"></script>
    <script>
      jQuery(document).ready(function () {
        jQuery("#datepicker1").datepicker({
          format: "dd-mm-yyyy",
          startDate: "+1d",
        });
      });
      jQuery(document).ready(function () {
        jQuery("#datepicker2").datepicker({
          format: "dd-mm-yyyy",
          startDate: "+1d",
        });
      });
    </script>
  </body>
</html>
