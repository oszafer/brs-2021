-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 16 Cze 2021, 20:01
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `2library`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `books`
--

CREATE TABLE `books` (
  `id_k` int(11) NOT NULL,
  `tytul` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `wydawnictwo` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `ilosc` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `books`
--

INSERT INTO `books` (`id_k`, `tytul`, `autor`, `wydawnictwo`, `status`, `ilosc`) VALUES
(1, 'Krótka historia czasu', 'Stephen Hawkings', 'ZYSK i S-KA WYDAWNICTWO', 'Dostępna', 2),
(2, 'Sztuka podstępu. Łamałem ludzi, nie hasła.', 'Kevin D. Mitnick', 'Helion SA', 'Dostępna', 2),
(3, 'Pacjentka', 'Alex Michaelides', 'Grupa Wydawnicza Foksal', 'Dostępna', 1),
(4, 'Trzynaście powodów', 'Jay Asher', 'Wydawnictwo Rebis', 'Dostępna', 2),
(5, 'Komputerowa analiza i przetwarzanie obrazów', 'Ryszard Tadeusiewicz, Przemysław Korohoda', 'Wydawnictwo Fundacji Postępu Telekomunikacji', 'Niedostępna', 2),
(6, 'Harry Potter i kamień filozoficzny', 'J.K Rowling', 'Media Rodzina', 'Niedostępna', 2),
(7, 'Harry Potter i Książę Półkrwi', 'J.K Rowling', 'Media Rodzina', 'Niedostępna', 1),
(8, 'Człowiek w poszukiwaniu sensu', 'Viktor E. Frankl', 'Czarna Owca', 'Dostępna', 2),
(9, 'Inny świat', 'Gustaw Herling-Grudziński', 'Wydawnictwo Literackie', 'Niedostępna', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fine`
--

CREATE TABLE `fine` (
  `login` varchar(100) NOT NULL,
  `id_k` int(100) NOT NULL,
  `zwrocono` varchar(100) NOT NULL,
  `dzien` int(50) NOT NULL,
  `kara` double NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `issue_book`
--

CREATE TABLE `issue_book` (
  `login` varchar(100) NOT NULL,
  `id_k` int(100) NOT NULL,
  `akceptacja` varchar(100) NOT NULL,
  `wypozyczono` varchar(100) NOT NULL,
  `zwrot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `issue_book`
--

INSERT INTO `issue_book` (`login`, `id_k`, `akceptacja`, `wypozyczono`, `zwrot`) VALUES
('ponczek1', 7, 'Tak', '2021-06-15', '2021-07-15'),
('ania', 5, 'Tak', '2021-06-16', '2021-07-16'),
('ania', 9, 'Tak', '2021-06-16', '2021-08-16'),
('ania', 7, 'Nie', '2021-06-16', '2021-07-16');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `librarians`
--

CREATE TABLE `librarians` (
  `id` int(11) NOT NULL,
  `imie` varchar(100) NOT NULL,
  `nazwisko` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `haslo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `librarians`
--

INSERT INTO `librarians` (`id`, `imie`, `nazwisko`, `login`, `haslo`) VALUES
(1, 'Ania', 'Rat', 'rato', 'ania123');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `imie` varchar(100) NOT NULL,
  `nazwisko` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `haslo` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`imie`, `nazwisko`, `login`, `haslo`, `user_id`, `email`) VALUES
('Anna', 'Ratowska', 'ania', 'ania123', 1, 'anka.ratowska@gmail.com'),
('Ania', 'Kowalska', 'ania12', '0cbfa4956e4d0c2a43caae219b5f2850', 12, 'ania12@poczta.pl'),
('imie', 'nazwisko', 'imie', '2870df4327b9e2618a55f90a93b22865', 114, 'imie@poczta.pl'),
('Ania', 'Szafer', 'ania122', '0cbfa4956e4d0c2a43caae219b5f2850', 144, 'ania121@poczta.pl'),
('Olga', 'Pasterz', 'pasterz', 'be909d4a6a36e5f9d85413ca2edbc2eb', 2411, 'pasterz@poczta.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_k`);

--
-- Indeksy dla tabeli `librarians`
--
ALTER TABLE `librarians`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `books`
--
ALTER TABLE `books`
  MODIFY `id_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `librarians`
--
ALTER TABLE `librarians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2412;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
