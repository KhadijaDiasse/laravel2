
<?php $users = User::findOrFail($id);

foreach($users as $user){

        Mail::to($request->user())->send($user->mail);
}