import { Component } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent {
  username: string = ''; // Property to hold the username input value
  password: string = ''; // Property to hold the password input value

  constructor(private router: Router) { }

  login(): void {
    // Perform authentication here (e.g., validate credentials)
    // For demonstration purposes, let's assume successful login
    if (this.username === 'admin' && this.password === 'password') {
      // If successful, navigate to the dashboard
      this.router.navigate(['/dashboard']);
    } else {
      // Display error message or handle unsuccessful login
      console.error('Invalid username or password!');
    }
  }
}
