<div role="tabpanel" class="tab-pane" id="week2">
  <article>

    <div class="title">
      <h1>Week 02 - Frequently Asked Questions</h1>

      <div class="clearfix"></div>

      <div class="col-md-6">
        <h3>Learning</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span><a href="http://multimedia.journalism.berkeley.edu/tutorials/html/" target="_blank">Intro to HTML &amp; CSS</a> &amp; <a href="http://www.codecademy.com/en/tracks/web" target="_blank">Codecademy HTML &amp; CSS</a></span>
          <br>
          <span class="next">This Week</span>:
          <span><a href="http://learn.shayhowe.com/html-css/" target="_blank">HTML &amp; CSS with shay howe</a> &amp; Github</span>
        </p>
      </div>
      <div class="col-md-6">
        <h3>Projects</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span><a href="http://codifyacademy.com/google_demo/" target="_blank">Google Replication</a></span>
          <br>
          <span class="next">This Week</span>:
          <span><a href="http://codifyacademy.com/salespage/" target="_blank">37 Signals Sales Page</a></span>
        </p>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-6">
      <div class="questions" ng-controller="htmlWeek2Ctrl">
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
      <div class="questions" ng-controller="cssWeek2Ctrl">
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

  </article>
</div>