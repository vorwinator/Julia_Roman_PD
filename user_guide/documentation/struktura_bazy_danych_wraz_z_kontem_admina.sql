-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Sty 2022, 20:57
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `car_rent`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `account`
--

CREATE TABLE `account` (
  `id_acc` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `acc_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `account`
--

INSERT INTO `account` (`id_acc`, `email`, `password`, `firstname`, `lastname`, `acc_type`) VALUES
(1, 'admin@gmail.com', '7891035a5b87a54279967ddd61e53df7', 'Admin', 'Admin', '1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `car`
--

CREATE TABLE `car` (
  `id_car` int(11) NOT NULL,
  `release_year` year(4) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `price_per_day` decimal(10,2) NOT NULL,
  `price_per_kilometer_with_chauffeur` decimal(10,2) NOT NULL,
  `mileage` int(11) NOT NULL,
  `rental_status` tinyint(1) NOT NULL,
  `insurance` varchar(50) NOT NULL,
  `pictures` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `car_details`
--

CREATE TABLE `car_details` (
  `id_car_details` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `average_consumption` decimal(10,2) NOT NULL,
  `number_of_airbags` int(2) NOT NULL,
  `number_of_doors` int(2) NOT NULL,
  `number_of_seats` int(2) NOT NULL,
  `drive` varchar(20) NOT NULL,
  `air_conditioning` varchar(50) NOT NULL,
  `gearbox` varchar(50) NOT NULL,
  `trunk_capacity` decimal(10,2) NOT NULL,
  `deposit` decimal(10,2) NOT NULL,
  `car_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `car_rental_facility`
--

CREATE TABLE `car_rental_facility` (
  `id_car_rental_facility` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `working_hours` varchar(150) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `car_ride`
--

CREATE TABLE `car_ride` (
  `id_car_ride` int(11) NOT NULL,
  `id_acc` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `start_address` varchar(255) NOT NULL,
  `finish_address` varchar(255) NOT NULL,
  `kilometers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `id_acc` int(11) NOT NULL,
  `id_car_rental_facility` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `return_to` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indeksy dla tabeli `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id_car`);

--
-- Indeksy dla tabeli `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`id_car_details`),
  ADD KEY `id_car` (`id_car`);

--
-- Indeksy dla tabeli `car_rental_facility`
--
ALTER TABLE `car_rental_facility`
  ADD PRIMARY KEY (`id_car_rental_facility`);

--
-- Indeksy dla tabeli `car_ride`
--
ALTER TABLE `car_ride`
  ADD PRIMARY KEY (`id_car_ride`),
  ADD KEY `car_ride_ibfk_1` (`id_car`);

--
-- Indeksy dla tabeli `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`),
  ADD KEY `id_car` (`id_car`),
  ADD KEY `id_acc` (`id_acc`),
  ADD KEY `rental_ibfk_2` (`id_car_rental_facility`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `account`
--
ALTER TABLE `account`
  MODIFY `id_acc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `car`
--
ALTER TABLE `car`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `car_details`
--
ALTER TABLE `car_details`
  MODIFY `id_car_details` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `car_rental_facility`
--
ALTER TABLE `car_rental_facility`
  MODIFY `id_car_rental_facility` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `car_ride`
--
ALTER TABLE `car_ride`
  MODIFY `id_car_ride` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `car_details`
--
ALTER TABLE `car_details`
  ADD CONSTRAINT `car_details_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `car` (`id_car`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `car_ride`
--
ALTER TABLE `car_ride`
  ADD CONSTRAINT `car_ride_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `car` (`id_car`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `rental_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `car` (`id_car`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rental_ibfk_2` FOREIGN KEY (`id_car_rental_facility`) REFERENCES `car_rental_facility` (`id_car_rental_facility`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rental_ibfk_3` FOREIGN KEY (`id_acc`) REFERENCES `account` (`id_acc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
