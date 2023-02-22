import { Injectable } from '@angular/core';
import { Login } from '../model/login.model';
import { Auth, createUserWithEmailAndPassword, signInWithEmailAndPassword, signOut  } from '@angular/fire/auth';

@Injectable({
  providedIn: 'root'
})

export class AuthService {
  constructor(private auth: Auth) { }

  async register(login: Login) {
    try{
    const user = await createUserWithEmailAndPassword(
      this.auth,
       login.email,
       login.password
       );
       return user;
    } catch (err) {
      return null;
    }
  }


  async login (login: Login) {
      try{
        const user = await signInWithEmailAndPassword(
      this.auth,
       login.email,
       login.password
       );
       return user;
    } catch (err) {
      return null;
    }
  }

  logout() {
    return signOut(this.auth);
  }
}
