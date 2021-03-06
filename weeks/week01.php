<div role="tabpanel" class="tab-pane" id="week1">
  <article>

    <div class="title">
      <div class="col-md-12">
        <h1>Week 01 - Frequently Asked Questions</h1>
      </div>
      <div class="clearfix"></div>
      
      <div class="col-md-6">
        <h3>Learning</h3>
        <p class="currentWork">
          <span class="prev">Previous Week</span>:
          <span></span>
          <br>
          <span class="next">This Week</span>:
          <span><a href="http://multimedia.journalism.berkeley.edu/tutorials/html/" target="_blank">Intro to HTML &amp; CSS</a> &amp; <a href="http://www.codecademy.com/en/tracks/web" target="_blank">Codecademy HTML &amp; CSS</a></span>
        </p>
      </div>
      <div class="col-md-6">
        <h3>Projects</h3>
        <p class="currentWork">
          <span class="prev">Previous Week</span>:
          <span></span>
          <br>
          <span class="next">This Week</span>:
          <span><a href="http://codifyacademy.com/google_demo/" target="_blank">Google Replication</a></span>
        </p>
      </div>

      <div class="clearfix"></div>

      <div class="col-md-6">
        <div class="questions" ng-controller="htmlWeek1Ctrl">
          <div class="htmlQuestion">
            <i class="fa fa-html5"></i> HTML Questions
          </div>
          <div class="questionWrap" ng-repeat="x in questions">
            <div class="question panel-title">{{x.question}}</div>
            <div class="answer">
              <p ng-bind-html="x.answer"></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="questions" ng-controller="cssWeek1Ctrl">
          <div class="cssQuestion">
            <i class="fa fa-css3"></i> CSS Questions
          </div>
          <div class="questionWrap" ng-repeat="x in questions">
            <div class="question panel-title">{{x.question}}</div>
            <div class="answer">
              <p ng-bind-html="x.answer"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
</div> 
