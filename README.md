# Objectify Behavior (Plugin CakePHP)

The ObjectifyBehavior aims to convert the usual array that CakePHP return ( e.g, find() ) into an object.


## Requirements

* CakePHP 2.x
* PHP5

## Installation

_[Manual]_

* Download this: [https://github.com/SoftMonkeyJapan/ObjectifyBehavior/archive/master.zip](https://github.com/SoftMonkeyJapan/ObjectifyBehavior/archive/master.zip)
* Unzip that download.
* Go into the unzip folder
* Copy the file `ObjectifyBehavior.php` to `Models/Behaviors`

_[GIT Clone]_

In your `Models/Behaviors` directory type:

	git clone -b master git://github.com/SoftMonkeyJapan/ObjectifyBehavior.git
	cp ObjectifyBehavior/ObjectifyBehavior.php ./ObjectifyBehavior.php


## Usage

Go into your model :

	<?php
	class Post extends AppModel {

	}
	?>

Then if it does not exists yet, create the model attribute `actsAs` and add the Objectify behavior :

	<?php
	class Post extends AppModel {
		
		$public $actsAs = array('Objectify');
	}
	?>

And that's all. You're now good to go. You can simply access the attributes as an object : 

	<?php
	class PostsController extends AppController {

		public function index() {
			// Find first
			$post = $this->Post->find('first');
			echo $post->name;

			// Example with a find all
			$posts = $this->Post->find('all');
			foreach( $posts as $post ){
				echo $post->name;
				echo $post->content;
			}
		}
	}
	?>


## License

You are allowed to use it whatever you want and whenever you want.