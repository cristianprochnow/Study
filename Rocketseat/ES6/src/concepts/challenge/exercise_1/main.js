class User {
  constructor(email, password) {
    this.email = email;
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

class Admin extends User {
  constructor(email, password) {
    super(email, password);

    this.admin = true;
  }
}


const UserTest = new User('user@gmail.com', 'Safado');
const AdminTest = new Admin('admin@gmail.com', 'Outro Safado');

console.log(UserTest.isAdmin());
console.log(AdminTest.isAdmin());
