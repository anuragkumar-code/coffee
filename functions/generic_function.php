<?php 

//function to validate admin user
function hasPageAccess($requiredRole) {
    if (isset($_SESSION['admin_role'])) {
        return in_array($requiredRole, $_SESSION['admin_role']);
    }
    return false;
}

//function to validate roles
function hasRole($roles, $role) {
    return in_array($role, $roles);
}





?>