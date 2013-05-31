## Form Model CRUD

In this branch, I'm doing simple CRUD on a post resource (no validation).

Note that I attempted to use a single form partial (`app/posts/_form.blade.php`) for the create and edit views, however there's currently no way in L4 to automatically detect the view and place the corresponding method on the form (POST, PUT). So I manually set that part of the form in the views and abstracted out what I could (that made sense).

Using a single form is possible by instantiating an empty Post model and passing that into the form's create view. Since we're using Form::model() and populating the form with the Post model, it will display an empty form for `app/views/posts/create.blade.php` because our model is empty. However, when displaying the edit form, it will populate the form with the data from the existing model. 

Pretty neat! :)