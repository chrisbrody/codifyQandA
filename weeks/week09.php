<div role="tabpanel" class="tab-pane" id="week9">
  <article>

    <div class="title">
      <h1>Week 09 Power Coding Session</h1>

      <div class="clearfix"></div>

      <div class="col-md-6">
        <h3>Learning</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span><a href="http://code.tutsplus.com/courses/30-days-to-learn-jquery" target="_blank">Tutsplus - learn jQuery in 30 days</a></span>
          <br>
          <span class="next">This Week</span>:
          <span><a href="http://www.codecademy.com/en/tracks/javascript" target="_blank">Codecademy</a> - JavaScript sections 1 - 4</span>
        </p>
      </div>
      <div class="col-md-6">
        <h3>Projects</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span>Begin building 1 page portfolio, either from scratch of using bootstrap, the choice is theirs</span>
          <br>
          <span class="next">This Week</span>:
          <span>Finish building 1 page portfolio, either from scratch of using bootstrap, the choice is theirs</span>
        </p>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-6">
      <div class="questions" ng-controller="htmlWeek9Ctrl">
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
      <div class="questions" ng-controller="cssWeek9Ctrl">
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