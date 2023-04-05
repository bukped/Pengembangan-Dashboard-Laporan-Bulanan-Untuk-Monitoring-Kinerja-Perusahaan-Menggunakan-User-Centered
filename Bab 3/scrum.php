class ScrumProject {
  private $projectName;
  private $sprints;

  public function __construct($projectName) {
    $this->projectName = $projectName;
    $this->sprints = array();
  }

  public function addSprint($sprint) {
    $this->sprints[] = $sprint;
  }

  public function getSprint($sprintNumber) {
    foreach ($this->sprints as $sprint) {
      if ($sprint->getSprintNumber() == $sprintNumber) {
        return $sprint;
      }
    }
    return null;
  }
  
  public function runProject() {
    foreach ($this->sprints as $sprint) {
      $sprint->runSprint();
    }
  }
}

class Sprint {
  private $sprintNumber;
  private $stories;
  
  public function __construct($sprintNumber) {
    $this->sprintNumber = $sprintNumber;
    $this->stories = array();
  }
  
  public function addStory($story) {
    $this->stories[] = $story;
  }

  public function getSprintNumber() {
    return $this->sprintNumber;
  }
  
  public function runSprint() {
    foreach ($this->stories as $story) {
      $story->runStory();
    }
  }
}

class Story {
  private $storyName;
  
  public function __construct($storyName) {
    $this->storyName = $storyName;
  }
  
  public function runStory() {
    // implementasi untuk menjalankan cerita
  }
}

// contoh penggunaan
$project = new ScrumProject("My Project");
$sprint1 = new Sprint(1);
$sprint1->addStory(new Story("Implement feature A"));
$sprint1->addStory(new Story("Implement feature B"));
$project->addSprint($sprint1);
$sprint2 = new Sprint(2);
$sprint2->addStory(new Story("Fix bug X"));
$sprint2->addStory(new Story("Fix bug Y"));
$project->addSprint($sprint2);
$project->runProject();
