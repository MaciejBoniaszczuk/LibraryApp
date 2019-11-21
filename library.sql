-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Lis 2019, 22:13
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `library`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `books`
--

CREATE TABLE `books` (
  `idBooks` int(11) NOT NULL,
  `Title` text COLLATE utf8_polish_ci NOT NULL,
  `First Name` text COLLATE utf8_polish_ci NOT NULL,
  `Last Name` text COLLATE utf8_polish_ci NOT NULL,
  `Publisher` text COLLATE utf8_polish_ci NOT NULL,
  `Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `books`
--

INSERT INTO `books` (`idBooks`, `Title`, `First Name`, `Last Name`, `Publisher`, `Year`) VALUES
(2, 'PHP : 101 praktycznych skryptów', 'Marcin', 'Lis', 'Helion', 2007),
(3, 'PHP', 'Julie', 'C. Meloni', 'Wydawnictwo RM', 2001),
(4, 'PHP : praktyczne projekty', 'Włodzimierz', 'Gajda', 'Helion', 2009),
(5, 'PHP i MySQL : 101 porad', 'Łukasz', 'Sosna', 'Mikom', 2005);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `borred`
--

CREATE TABLE `borred` (
  `idBorred` int(11) NOT NULL,
  `idClients` int(11) NOT NULL,
  `idBooks` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `borred`
--

INSERT INTO `borred` (`idBorred`, `idClients`, `idBooks`, `Date`) VALUES
(1, 2, 1, '2019-05-26'),
(2, 3, 4, '2019-07-15'),
(3, 2, 1, '2019-10-20'),
(4, 4, 4, '2019-03-13');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clients`
--

CREATE TABLE `clients` (
  `idClients` int(11) NOT NULL,
  `First Name` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Last Name` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Index Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `clients`
--

INSERT INTO `clients` (`idClients`, `First Name`, `Last Name`, `Index Number`) VALUES
(1, 'Katarzyna', 'Andruszewicz', 145698),
(2, 'Anna', 'Kowal', 628465),
(3, 'Krzysztof', 'Kopeć', 456458),
(4, 'Artur', 'Romanowicz', 768249);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`idBooks`);

--
-- Indeksy dla tabeli `borred`
--
ALTER TABLE `borred`
  ADD PRIMARY KEY (`idBorred`);

--
-- Indeksy dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`idClients`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `books`
--
ALTER TABLE `books`
  MODIFY `idBooks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `borred`
--
ALTER TABLE `borred`
  MODIFY `idBorred` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `clients`
--
ALTER TABLE `clients`
  MODIFY `idClients` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
