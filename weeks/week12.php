<div role="tabpanel" class="tab-pane" id="week12">
  <article>

    <!-- Title -->
    <div class="title">
      <h1>Week 12 - 16 Power Coding Session</h1>

      <div class="clearfix"></div>
      
      <div class="col-md-6">
        <h3>Learning</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span>Job Search Process &amp; Projects</span>
          <br>
          <span class="next">This Week</span>:
          <span>Job Search Process &amp; Projects</span>
        </p>
      </div>
      <div class="col-md-6">
        <h3>Projects</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span>Start Frontend Group App/Website Project</span>
          <br>
          <span class="next">This Week</span>:
          <span>Finish Frontend Group App/Website Project</span>
        </p>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="clearfix"></div>

    <div class="col-md-6">
      <div class="questions" ng-controller="htmlWeek12Ctrl">
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
      <div class="questions" ng-controller="cssWeek12Ctrl">
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