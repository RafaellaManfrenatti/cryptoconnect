// SPDX-License-Identifier: MIT

pragma solidity ^0.8.0;
/// @title CryptoConnect
/// @author Rafaella Rodrigues da S Manfrenatti
/// @notice Register User
/// @dev register use with wallet ethereum

contract UserRegistry {
    mapping(address => bool) public registeredUsers;


    event UserRegistered(address indexed user);

    function registerUser() public {
        require(!registeredUsers[msg.sender], "User already registered");
        
        registeredUsers[msg.sender] = true;
        emit UserRegistered(msg.sender);
    }
}
