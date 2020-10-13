@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="profile-container">
          <img src="css/images/profile.png" alt="profile picture" class="profile-picture"/>
          <table class="profile-description-1">
              <thead>
              <tr>
                  <th class="profile-description-text">Role</th>
                  <th class="profile-description-text">Name</th>
                  <th class="profile-description-text">Gym</th>
                  <th class="profile-description-text">Discipline</th>
                  <th class="profile-description-text">Weight</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td class="profile-description-text">Coach</td>
                  <td class="profile-description-text">Daniel Abdi</td>
                  <td class="profile-description-text">KR Boxing</td>
                  <td class="profile-description-text">Boxing</td>
                  <td class="profile-description-text">74</td>
              </tr>
              </tbody>
          </table>
      </div>
      <div class="profile-container">
          <h2>Past Sparrings</h2>
          <img src="css/images/card.png" alt="profile picture" class="profile-card"/>
          <img src="css/images/card.png" alt="profile picture" class="profile-card"/>
          <img src="css/images/card.png" alt="profile picture" class="profile-card"/>
          <img src="css/images/card.png" alt="profile picture" class="profile-card"/>
      </div>
      <a href="#" class="edit-profile btn btn-primary">Edit Profile</a>
  </div>

@endsection
