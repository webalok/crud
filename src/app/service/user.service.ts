import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { User       } from "../model/user.model";

@Injectable()
export class UserService {
  constructor(private http: HttpClient) { }
  
  baseUrl: string     = 'http://localhost/cyaam/user-list.php';
  postUrl: string     = 'http://localhost/cyaam/posted.php';
  deleteUrl:string    = 'http://localhost/cyaam/delete.php?ID=';
  getUserbyId:string  = 'http://localhost/cyaam/get-user-list.php?ID=';
  putUrl: string      = 'http://localhost/cyaam/put-data.php';

  getUsers() {
    return this.http.get<any>(this.baseUrl);
  }

  getUserById(id: number) {
    return this.http.get<any>(this.getUserbyId + '' + id);
  }

  createUser(user: User) {
    return this.http.post<any>(this.postUrl, user);
  }

  updateUser(user: User) {
    return this.http.put<any>(this.putUrl + '/' + user.id, user);
  }

  deleteUser(id: number) {
    return this.http.delete<any>(this.deleteUrl + '' + id);
  }
}
