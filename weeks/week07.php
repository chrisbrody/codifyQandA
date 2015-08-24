<div role="tabpanel" class="tab-pane" id="week7">
  <article>

    <div class="title">
      <h1>Week 07 Power Coding Session</h1>

      <div class="clearfix"></div>

      <div class="col-md-6">
        <h3>Learning</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span>Break - Projects</span>
          <br>
          <span class="next">This Week</span>:
          <span>Learn jQuery - interactive resource <a href="http://www.codecademy.com/en/tracks/jquery" target="_blank">Codecademy</a> - video resource <a href="http://gymnasium.aquent.com/catalog/course/102" target="_blank">Aquent Gym</a></span>
        </p>
      </div>
      <div class="col-md-6">
        <h3>Projects</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span>Finish Bootstrap theme Replication 3-5 pages</span>
          <br>
          <span class="next">This Week</span>:
          <span>Complete creating 1 page portfolio for another person ( i.e. photographer, wedding planner, video production, chef ect. ) - can be with or without bootstrap, Students choice</span>
        </p>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-6">
      <div class="questions" ng-controller="htmlWeek7Ctrl">
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
      <div class="questions" ng-controller="cssWeek7Ctrl">
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