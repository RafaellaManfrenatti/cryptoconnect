// SPDX-License-Identifier: MIT

pragma solidity ^0.8.0;
/// @title CryptoConnect
/// @author Rafaella Rodrigues da S Manfrenatti
/// @notice Register 
/// @dev register 

contract CryptoConnectToken {
    string public name;
    string public symbol;
    uint256 public totalSupply;
    mapping(address => uint256) public balanceOf;

    event Transfer(address indexed from, address indexed to, uint256 value);

    constructor(string memory _name, string memory _symbol, uint256 _totalSupply) {
        name = _name;
        symbol = _symbol;
        totalSupply = _totalSupply;
        balanceOf[msg.sender] = _totalSupply;
    }

    function transfer(address _to, uint256 _value) external {
        require(balanceOf[msg.sender] >= _value, "Insufficient balance");
        balanceOf[msg.sender] -= _value;
        balanceOf[_to] += _value;
        emit Transfer(msg.sender, _to, _value);
    }

    function buyTokens(uint256 _amount) external payable {
        uint256 tokenPrice = 1 ether; // Preço de cada token em wei (1 ether = 1 token)
        uint256 cost = tokenPrice * _amount;

        require(msg.value >= cost, "Insufficient payment");

        balanceOf[msg.sender] += _amount;
        totalSupply += _amount;

        if (msg.value > cost) {
            uint256 refund = msg.value - cost;
            payable(msg.sender).transfer(refund);
        }

        emit Transfer(address(0), msg.sender, _amount);
    }
}
