<div role="tabpanel" class="tab-pane" id="week3">
  <article>

    <div class="title">
      <h1>Week 03 Power Coding Session</h1>

      <div class="clearfix"></div>

      <div class="col-md-6">
        <h3>Learning</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span><a href="http://learn.shayhowe.com/html-css/" target="_blank">HTML &amp; CSS with shay howe</a> &amp; Github</span>
          <br>
          <span class="next">This Week</span>:
          <span><a href="http://learn.shayhowe.com/html-css/" target="_blank">Advanced HTML5 &amp; CSS3 with shay howe</a> &amp; <a href="http://designschool.canva.com/blog/graphic-design-tips-non-designers/" target="_blank">25 Design Tips</a></span>
        </p>
      </div>
      <div class="col-md-6">
        <h3>Projects</h3>
        <p>
          <span class="prev">Previous Week</span>:
          <span><a href="http://codifyacademy.com/salespage/" target="_blank">37 Signals Sales Page</a></span>
          <br>
          <span class="next">This Week</span>:
          <span>PSD replication using color picker, pageruler &amp; <a href="https://www.canva.com/" target="_blank">Canva</a></span>
        </p>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-6">
      <div class="questions" ng-controller="htmlWeek3Ctrl">
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
      <div class="questions" ng-controller="cssWeek3Ctrl">
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