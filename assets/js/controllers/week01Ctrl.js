app.controller('htmlWeek1Ctrl', ['$scope', '$sce' ,function ($scope, $sce) {
  $scope.questions = [
		// question 1
    {question:'How do I create a folder?', answer:'Right click on your desktop, and select <code>new folder</code>, then rename it.  <span>Shortcut:</span> <code>ctrl+shift+n (Windows &amp; Linux) || cmd+shift+n (Mac)</code>'},
    // question 2
    {question:'Anim pariatur cliche reprehenderit?',answer:'Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.'},
    // question 3
    {question:'Anim pariatur cliche reprehenderit?',answer:'Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.'}
  ];
}])
.controller('cssWeek1Ctrl', ['$scope', '$sce' ,function ($scope, $sce) {
  $scope.questions = [
  	// question 1
    {question:'How do I create a CSS tag?', answer:'Right click on your desktop, and select <code>new folder</code>, then rename it.  <span>Shortcut:</span> <code>ctrl+shift+n (Windows &amp; Linux) || cmd+shift+n (Mac)</code>'},
    // question 2
    {question:'Anim pariatur cliche reprehenderit?',answer:'Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.'},
    // question 3
    {question:'Anim pariatur cliche reprehenderit?',answer:'Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.'}
  ];
}]);