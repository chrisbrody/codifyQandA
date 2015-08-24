<div role="tabpanel" class="tab-pane" id="week10">
  <article>

    <div class="title">
      <h1>Week 10 Power Coding Session</h1>

      <div class="clearfix"></div>

      <div class="col-md-6">
        <h3>Learning</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span><a href="http://www.codecademy.com/en/tracks/javascript" target="_blank">Codecademy</a> - JavaScript sections 1 - 4</span>
          <br>
          <span class="next">This Week</span>:
          <span><a href="http://www.codecademy.com/en/tracks/javascript" target="_blank">Codecademy</a> - JavaScript sections 5 - 8</span>
        </p>
      </div>
      <div class="col-md-6">
        <h3>Projects</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span>Finish building 1 page portfolio, either from scratch of using bootstrap, the choice is theirs</span>
          <br>
          <span class="next">This Week</span>:
          <span>PSD 2.0 &amp; Linkedin</span>
        </p>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-6">
      <div class="questions" ng-controller="htmlWeek10Ctrl">
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
      <div class="questions" ng-controller="cssWeek10Ctrl">
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