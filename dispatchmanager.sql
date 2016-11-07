--
-- Database: `dispatchmanager`
--
CREATE DATABASE IF NOT EXISTS `dispatchmanager` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dispatchmanager`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `empId` int(10) NOT NULL,
  `empUsername` varchar(9) NOT NULL,
  `empPassword` varchar(48) NOT NULL,
  `empNric` varchar(9) NOT NULL,
  `empName` varchar(48) NOT NULL,
  `empPhone` int(8) NOT NULL,
  `empAddress` text NOT NULL,
  `empType` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empId`, `empUsername`, `empPassword`, `empNric`, `empName`, `empPhone`, `empAddress`, `empType`) VALUES
(4, 'Admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'S9876123A', 'Lewis Hamilton', 81234567, 'Somewhere In Singapore', 1),
(5, 'S9654321B', '5f4dcc3b5aa765d61d8327deb882cf99', 'S9654321B', 'Thomas Jacob', 91234567, 'Somewhere In Singapore', 5);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
CREATE TABLE `package` (
  `packageId` int(11) NOT NULL,
  `itemStatus` varchar(20) NOT NULL,
  `deliveryAddress` text NOT NULL,
  `eta` int(11) NOT NULL,
  `loaded` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packageId`, `itemStatus`, `deliveryAddress`, `eta`, `loaded`) VALUES
(10000000, 'Undelivered', 'Somewhere in Singapore', 240, 1),
(10000002, 'Undelivered', 'Somewhere in Singapore', 0, 0),
(10000003, 'Delivered', 'Somewhere in Singapore', 0, 1),
(10000004, 'Undelivered', 'Somewhere in Singapore', 60, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empId`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packageId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `packageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000005;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
