import { Component, OnInit } from '@angular/core';
import {Router} from "@angular/router";
import {UserService} from "../service/user.service";
// import {User} from "../model/user.model";

@Component({
  selector: 'app-list-user',
  templateUrl: './list-user.component.html',
  styleUrls: ['./list-user.component.css']
})
export class ListUserComponent implements OnInit {

  users = new Array();

  constructor(private router: Router, private userService: UserService) { }
  
  ngOnInit() {
    this.userService.getUsers()
      .subscribe(
        data => { this.users = data; }
      );
  }

  deleteUser(user: any): void {
    this.userService.deleteUser(user.id)
      .subscribe( data => { if(data.success==true){
        alert('Done');
      }
    }) 
  };

  editUser(user: any): void {
    localStorage.removeItem("editUserId");
    localStorage.setItem("editUserId", user.id.toString());
    this.router.navigate(['edit-user']);
  };

  addUser(): void {
    this.router.navigate(['add-user']);
  };
}
