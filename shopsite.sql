-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 07:05 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `aid` int(11) NOT NULL,
  `atitle` varchar(255) NOT NULL,
  `aimage` varchar(255) NOT NULL,
  `adiscription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`aid`, `atitle`, `aimage`, `adiscription`) VALUES
(1, 'shopsite ', '5844726_1569559343_about_pic3.jpg', ' APSMIND Technology Pvt. Ltd. an ISO 9001:2008 certified an Application Software Consultancy and Services Group and Training Institute, which started its journey in the year 2014. APSMIND Technology Pvt. Ltd is also a Business Associate cum Strategic reseller of HP Software University Software testing and Big Data courses for Graduate students in India. It was established with the objective of providing quality IT technical education with ample company exposure, caters to the needs of the youth with its innovative teaching methods. Our technological expertise, high-quality standards, creativity and efficiency are combined in our services to deliver maximum value to our students/clients.\r\n \r\n \r\n \r\n \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `image`, `name`, `email`, `password`) VALUES
(1, 'c4.jpg', 'manisha', 'manisha@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `bid` int(11) NOT NULL,
  `btitle` varchar(255) NOT NULL,
  `bimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`bid`, `btitle`, `bimage`) VALUES
(11, 'banner', '3969183_1563903621_07.jpg'),
(13, 'banner', '8371310_1564290313_9190809_1563903138_02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bid` int(11) NOT NULL,
  `btitle` varchar(255) NOT NULL,
  `bshortdiscription` varchar(255) NOT NULL,
  `blongdiscription` text NOT NULL,
  `bimage` varchar(255) NOT NULL,
  `bauthorname` varchar(255) NOT NULL,
  `bdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bid`, `btitle`, `bshortdiscription`, `blongdiscription`, `bimage`, `bauthorname`, `bdate`) VALUES
(7, 'Shoping Tips', 'Shoping Tips', 'Shoping Tips', '5604926_1569559384_blog-grid-pic3.jpg', 'Shoping Tips', 'Shoping Tips'),
(8, 'Shoping2', 'Shoping2', 'Shoping2', '1458604_1569559403_blog-grid-pic8.jpg', 'Shoping2', 'Shoping2'),
(9, 'Style', 'style blog', 'style blog', '4563530_1569559452_blog-grid-pic1.jpg', 'manisha', '2019-09-28'),
(10, 'smile', 'smile', 'smile', '4749620_1569559496_blog-grid-pic5.jpg', 'manisha', '2019-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `ctitle`, `cdate`) VALUES
(26, 'WOMENS', 'womens', '2019-07-23 05:46:03'),
(29, 'Mens', 'mens', '2019-09-20 04:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `coid` int(11) NOT NULL,
  `cotitle` varchar(255) NOT NULL,
  `coaddress` varchar(255) NOT NULL,
  `colocation` varchar(255) NOT NULL,
  `comobilenumber` int(12) NOT NULL,
  `cophonenumber` int(40) NOT NULL,
  `coemailid` varchar(255) NOT NULL,
  `cofacebook` varchar(255) NOT NULL,
  `coyoutube` varchar(255) NOT NULL,
  `coinstagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`coid`, `cotitle`, `coaddress`, `colocation`, `comobilenumber`, `cophonenumber`, `coemailid`, `cofacebook`, `coyoutube`, `coinstagram`) VALUES
(1, 'Manisha office  new', 'Alnahas Building, 2 AlBahr St, Tanta AlGharbia, Egypt.', 'London', 898988980, 1234567890, 'manisha@webrul.com', 'contact@facebook.com', 'manisha@gmail.com', 'manu@instagram.com'),
(2, 'Rishav Office old', 'Alnahas Building, 2 AlBahr St, Tanta AlGharbia, Egypt.', 'uk new', 12345678, 2147483647, 'contact@webrul.com', 'contact@facebook.com', 'youtube@youtube.com', 'intagram@intagr.com');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `eid` int(11) NOT NULL,
  `ename` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `ephoneno` int(12) NOT NULL,
  `esubject` varchar(255) NOT NULL,
  `emessage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`eid`, `ename`, `email`, `ephoneno`, `esubject`, `emessage`) VALUES
(1, 'manisha', 'manisha@gmail.c', 45346456, 'new enqury', 'jdsfnjsddnfjdskfn');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `lid` int(11) NOT NULL,
  `ltitle` varchar(255) NOT NULL,
  `iimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`lid`, `ltitle`, `iimage`) VALUES
(1, 'logo new', '1569559249_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `oid` int(255) NOT NULL,
  `pskuno` varchar(255) NOT NULL,
  `proname` text NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincodeno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ordertransfer` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`oid`, `pskuno`, `proname`, `price`, `quantity`, `email`, `name`, `phoneno`, `city`, `state`, `pincodeno`, `address`, `ordertransfer`, `time`) VALUES
(8, '1', 'Shiva Kumar', 12500, '1', 'shiva@gmail.com', 'Shiva Kumar', '8448859406', 'Delhi', 'Delhi', '110033', 'a-289,rohini sec 20  new delhi 110086', 'cash', '2019-07-27 16:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pskuno` int(255) NOT NULL,
  `pcategory` varchar(255) NOT NULL,
  `psubcategory` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productnewprice` varchar(255) NOT NULL,
  `productoldprice` varchar(255) NOT NULL,
  `productstock` varchar(255) NOT NULL,
  `productcolor` varchar(255) NOT NULL,
  `productsize` varchar(255) NOT NULL,
  `pmultiimage` text NOT NULL,
  `pdisc` text NOT NULL,
  `pdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pskuno`, `pcategory`, `psubcategory`, `productname`, `productnewprice`, `productoldprice`, `productstock`, `productcolor`, `productsize`, `pmultiimage`, `pdisc`, `pdate`) VALUES
(11, 1, '26', '22', 'kurti1', '233', '455', '22', 'red', '36,38', '2260470_1569560104_product_item10.jpg', 'Delhi kurti', '2019-09-27 04:55:04'),
(12, 2, '26', '22', 'kurti2', '233', '255', '22', 'green', '36,38', '3308919_1569560147_product_item11.jpg', 'jaipur', '2019-09-27 04:55:47'),
(13, 3, '26', '22', 'kurti3', '233', '255', '22', 'green', '36,38', '7077636_1569560191_product_item12.jpg', 'jaipur', '2019-09-27 04:56:31'),
(14, 4, '26', '22', 'kurti4', '233', '255', '88', 'green', '36,38', '7727864_1569560232_product_item13.jpg', 'Delhi', '2019-09-27 04:57:12'),
(15, 5, '26', '22', 'kurti5', '233', '255', '88', 'red', '36,38', '5409884_1569560283_product_item14.jpg', 'Delhi', '2019-09-27 04:58:03'),
(16, 6, '26', '22', 'kurti6', '233', '4555', '22', 'red', '36,38', '4574923_1569560348_product_item17.jpg', 'Delhi', '2019-09-27 04:59:08'),
(17, 7, '29', '29', 'man1', '233', '255', '22', 'green', '36,38', '8720703_1569560406_product_item1.jpg', 'Delhi', '2019-09-27 05:00:06'),
(18, 8, '29', '29', 'man2', '233', '255', '22', 'green', '36,38', '9654405_1569560449_product_item2.jpg', 'Delhi', '2019-09-27 05:00:49'),
(19, 9, '29', '29', 'man3', '233', '255', '22', 'green', '36,38', '1257324_1569560501_product_item4.jpg', 'Delhi', '2019-09-27 05:01:41'),
(20, 10, '29', '29', 'new', '233', '255', '22', 'green', '36,38', '4520670_1569560563_product_item5.jpg', 'Delhi', '2019-09-27 05:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sid` int(11) NOT NULL,
  `cid` varchar(11) NOT NULL,
  `stitle` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sid`, `cid`, `stitle`, `sname`, `sdate`) VALUES
(22, '26', 'kurti', 'kurti', '2019-09-27 04:51:32'),
(29, '29', 'cloths', 'cloths', '2019-09-27 04:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` text NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `uphoneno` int(12) NOT NULL,
  `upassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uphoneno`, `upassword`) VALUES
(1, 'manisha', 'manisha@g.com', 32434543, '123434');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `oid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
