import User from "./User";

class Admin extends User {
  constructor(email, password) {
    super(email, password);

    this.admin = true;
  }
}

export default Admin;
