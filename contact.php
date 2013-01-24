  <form class="form-horizontal" action="inc/send.php" method="post" id="contactForm">
    <fieldset>
      <div id="legend" class="">
        <legend class="">Form Name</legend>
      </div>
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="name">Name</label>
          <div class="controls">
            <input type="text" placeholder="Full Name" name="name" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="email">Email</label>
          <div class="controls">
            <input type="email" placeholder="email@url.com" name="email" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="phone">Phone</label>
          <div class="controls">
            <input type="phone" placeholder="(###) ### - ####" name="phone" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Textarea -->
          <label class="control-label">Message</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" class="" name="message"> </textarea>
            </div>
          </div>
        </div>
    <label class="control-label"></label>
    <div class="controls">
      <input type="submit" value="Submit" class="btn">
    </div>
    </fieldset>

  </form>
<div id="response"></div>


