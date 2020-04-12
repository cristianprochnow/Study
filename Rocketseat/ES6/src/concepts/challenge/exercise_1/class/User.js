class User {
  constructor(email, password) {
    this.mail = mail;
    this.password = password;
  }

  getPass() {
    return this.password;
  }

  getEmail() {
    return this.email;
  }

  isAdmin() {
    if (this.admin) {
      return true;
    } else {
      return false;
    }
  }
}

export default User;
