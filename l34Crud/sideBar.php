<div class="col-md-2 min-vh-100 bg-dark text-white">
      <h2 class="mt-5 mb-3">Admin Panel</h2>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button
              class="accordion-button <?= $page !== "addUser.php" ? 'collapsed':null; ?> bg-white text-dark shadow-none"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="<?= $page === "addUser.php" ? 'true':'false'; ?>"
              aria-controls="collapseOne"
            >
              Users
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse <?= $page === "addUser.php" ? 'show':null; ?>"
            aria-labelledby="headingOne"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <div class="list-group list-group-flush">
                <a href="#" class="list-group-item">User List</a>
                <a href="./addUser.php" class="list-group-item <?= $page === "addUser.php" ? 'active':null; ?>">Add New User</a>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button
              class="accordion-button collapsed bg-white text-dark shadow-none"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo"
            >
              My Profile
            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <div class="list-group list-group-flush">
                <a href="#" class="list-group-item">Change Password</a>
                <a href="#" class="list-group-item">Update Profile</a>
                <a href="./logout.php" class="list-group-item">Log out</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>