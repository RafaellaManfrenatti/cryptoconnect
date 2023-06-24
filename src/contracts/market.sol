// SPDX-License-Identifier: MIT

pragma solidity ^0.8.0;
/// @title CryptoConnect
/// @author Rafaella Rodrigues da S Manfrenatti
/// @notice Register market
/// @dev register market

contract Marketplace {
    address public owner;

    struct Product {
        uint256 id;
        string name;
        uint256 price;
        address seller;
        bool sold;
    }

    mapping(uint256 => Product) public products;
    uint256 public productCount;

    event ProductCreated(uint256 id, string name, uint256 price, address seller);
    event ProductSold(uint256 id, string name, uint256 price, address buyer);

    constructor() {
        owner = msg.sender;
    }

    modifier onlyOwner() {
        require(msg.sender == owner, "Only owner can perform this action");
        _;
    }

    modifier productExists(uint256 id) {
        require(id > 0 && id <= productCount, "Product does not exist");
        _;
    }

    modifier productNotSold(uint256 id) {
        require(!products[id].sold, "Product already sold");
        _;
    }

    function createProduct(string memory name, uint256 price) external {
        productCount++;
        products[productCount] = Product(productCount, name, price, msg.sender, false);
        emit ProductCreated(productCount, name, price, msg.sender);
    }

    function buyProduct(uint256 id) external payable productExists(id) productNotSold(id) {
        Product storage product = products[id];
        require(msg.value == product.price, "Incorrect amount sent");

        product.sold = true;
        emit ProductSold(id, product.name, product.price, msg.sender);

        payable(product.seller).transfer(product.price);
    }

    // Função para permitir que o proprietário retire os fundos do contrato, se houver
    function withdrawFunds() external onlyOwner {
        payable(owner).transfer(address(this).balance);
    }
}
