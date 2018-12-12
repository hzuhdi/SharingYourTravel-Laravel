@if (Auth::check())
<section class="site-section py-lg">
<div class="container">
<div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
@else
<section class="site-section py-lg">
<div class="container">
<div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <h4>*Please Login for comment </h4>
                <form action="#" class="p-5 bg-light">
                  <fieldset disabled="disabled">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>
                </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
                    
@endif


