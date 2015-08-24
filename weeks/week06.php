<div role="tabpanel" class="tab-pane" id="week6">
  <article>

    <div class="title">
      <h1>Week 06 Power Coding Session</h1>

      <div class="clearfix"></div>

      <div class="col-md-6">
        <h3>Learning</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span><a href="http://codifyacademy.com/bootstrapjs/" target="_blank">Bootstrap3 JavaScript Plugins</a></span>
          <br>
          <span class="next">This Week</span>:
          <span>Break - Projects</span>
        </p>
      </div>
      <div class="col-md-6">
        <h3>Projects</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span>Start Bootstrap theme Replication 3-5 pages</span>
          <br>
          <span class="next">This Week</span>:
          <span>Finish Bootstrap theme Replication 3-5 pages</span>
        </p>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-6">
      <div class="questions" ng-controller="htmlWeek6Ctrl">
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
      <div class="questions" ng-controller="cssWeek6Ctrl">
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