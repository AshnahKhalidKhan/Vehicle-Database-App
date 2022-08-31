-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 06:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inspectionslist`
--

-- --------------------------------------------------------

--
-- Table structure for table `inspectionscollection`
--

CREATE TABLE `inspectionscollection` (
  `DateAndTime` datetime NOT NULL,
  `Location` text NOT NULL,
  `TLName` text NOT NULL,
  `InspectionSummary` text DEFAULT NULL,
  `FitnessTestsExpiryDatesIssues` text NOT NULL,
  `VehicleDocumentsIssues` text NOT NULL,
  `TyresIssues` text NOT NULL,
  `LightsIssues` text NOT NULL,
  `HornsBuzzersIssues` text NOT NULL,
  `SafetyEquipmentIssues` text NOT NULL,
  `SwitchesValvesCablesIssues` text NOT NULL,
  `CoversPipesGuardsIssues` text NOT NULL,
  `MiscellaneousPartsIssues` text NOT NULL,
  `Images` varchar(100) DEFAULT NULL,
  `ComplianceStatus` text NOT NULL,
  `ActionStatus` text NOT NULL,
  `Notify` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspectionscollection`
--

INSERT INTO `inspectionscollection` (`DateAndTime`, `Location`, `TLName`, `InspectionSummary`, `FitnessTestsExpiryDatesIssues`, `VehicleDocumentsIssues`, `TyresIssues`, `LightsIssues`, `HornsBuzzersIssues`, `SafetyEquipmentIssues`, `SwitchesValvesCablesIssues`, `CoversPipesGuardsIssues`, `MiscellaneousPartsIssues`, `Images`, `ComplianceStatus`, `ActionStatus`, `Notify`) VALUES
('2022-07-27 10:28:04', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', NULL),
('2022-07-27 10:28:04', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', NULL),
('0000-00-00 00:00:00', 'TJB', 'ABC123kkdks', 'FAULTS DETECTED:\nTyre Inspection is OK.\nComments: Futher comments (if any)...\nABSLight is Dimming.\nComments: Happy \nHorns/Buzzers Inspection is OK.\nComments: Futher comments (if any)...\nSafetyEquipment is OK.\nComments: Futher comments (if any)...\nSwitches, Valves & Cables Inspection is OK.\nComments: Futher comments (if any)...\nRearguard is Not OK.\nSideguard is Not OK.\nSafetyRailingAndLock is Not OK.\nComments: Futher comments (if any)...\nPedalRubbers is Not OK.\nThreePointSeatbelt is Not OK.\nSteeringWheelAdjustment is Not OK.\nACHeater is Not OK.\nFrontBumper is Not OK.\nRearBumper is Not OK.\nAutomaticBrakeAdjuster is Not OK.\nWiper is Not OK.\nSpray is Not OK.\nBattery is Not OK.\nComments: Futher comments (if any)...\nADDITIONAL REMARKS:\nAdditional Remarks (if any)...', 'NONE', '', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'YES', 'YES', 'Dummy string value for testing', 'PreviousConcernsNotRectified', 'Allow', 'OtDManager'),
('0000-00-00 00:00:00', '', '7777', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', NULL),
('0000-00-00 00:00:00', '', '1999732u4n', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', NULL),
('2022-08-06 06:12:38', '', 'ABC2322', 'nO FAULTS', '', '', '', '', '', '', '', '', '', NULL, '', '', NULL),
('2022-08-06 06:12:38', '', 'ABC123', 'YES FAULTS', '', '', '', '', '', '', '', '', '', NULL, '', '', NULL),
('2022-08-06 06:13:53', '', 'ABC2322', 'BUNNY', '', '', '', '', '', '', '', '', '', NULL, '', '', NULL),
('2022-08-06 06:13:53', '', 'ABC2322', 'HAPPY', '', '', '', '', '', '', '', '', '', NULL, '', '', NULL),
('2022-08-06 06:17:35', '', 'ABC123', 'IIIIIIIIIIIIIIIIII', '', '', '', '', '', '', '', '', '', NULL, '', '', NULL),
('2022-08-06 06:17:35', '', 'ABC2322', 'YELLOW', '', '', '', '', '', '', '', '', '', NULL, '', '', NULL),
('0000-00-00 00:00:00', 'KMR', 'ABC123kkdks', 'FAULTS DETECTED:\nHandbook not onboard.\nTyre Air Pressure is not OK.\nDRL is Dimming\nCabin Light is Dimming\nHead Light is Dimming\nBrake Light is Dimming\nFog Light is Dimming\nParking Light is Dimming\nIndicator Light is Dimming\nABS Light is Damaged\nEarthing Cable is not OK.\nFuel Tank Cap is not OK.\nAutomatic Slack Adjuster is not OK.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'None.', 'Fit', 'ActionStatusAllowWithWarning', 'OtDManager'),
('0000-00-00 00:00:00', 'CKL', 'ABC123kkdks', 'FAULTS DETECTED:\nValid CNIC not onboard.\nValves are not OK.\nBattery is not OK.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'None.', 'Fit', 'ActionStatusAllowWithWarning', 'OtDManager'),
('0000-00-00 00:00:00', 'SSH', 'ABC123', 'FAULTS DETECTED:\nWiring Insulation is not OK.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'None.', 'Fit', 'Allow', 'RTEngineer'),
('0000-00-00 00:00:00', 'QUETTA', 'ABC123', 'FAULTS DETECTED:\nABS Light is Dimming\nADDITIONAL REMARKS:\nNone.', 'NONE', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'None.', 'Fit', 'Allow', 'None.'),
('0000-00-00 00:00:00', 'QUETTA', 'ABC123', 'FAULTS DETECTED:\nABS Light is Dimming\nADDITIONAL REMARKS:\nNone.', 'NONE', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'None.', 'Fit', 'Allow', 'None.'),
('0000-00-00 00:00:00', 'VHR', 'ABC123', 'FAULTS DETECTED:\nPedal Rubbers are not OK.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'None.', 'Fit', 'Allow', 'None.'),
('0000-00-00 00:00:00', 'MHK', 'ABC123', 'FAULTS DETECTED:\nHazchem Codes are FAIL\nDriver PPE is FAIL\nMask Respirator is FAIL\nSafety Cones With Reflective Tape are FAIL\nFirst Aid Box is FAIL\nSpill Kit is FAIL\nExplosives-proof Torch is FAIL\nSpare Tyre is FAIL\nFire Extinguisher is FAIL\nDRL is FAIL\nCabin Light is FAIL\nHead Light is FAIL\nBrake Light is FAIL\nFog Light is FAIL\nParking Light is FAIL\nIndicator Light is FAIL\nABS Light is FAIL\nHorn is FAIL\nCabin Light is FAIL\nHead Light is FAIL\nWiring Insulation is not OK.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'None.', 'Fit', 'Allow', 'None.'),
('0000-00-00 00:00:00', 'SSH', 'ABC123', 'FAULTS DETECTED:\nHazchem Codes are FAIL\nDriver PPE is FAIL\nMask Respirator is FAIL\nSafety Cones With Reflective Tape are FAIL\nFirst Aid Box is FAIL\nSpill Kit is FAIL\nExplosives-proof Torch is FAIL\nSpare Tyre is FAIL\nFire Extinguisher is FAIL\nDRL is FAIL\nCabin Light is FAIL\nHead Light is FAIL\nBrake Light is FAIL\nFog Light is FAIL\nParking Light is FAIL\nIndicator Light is FAIL\nABS Light is FAIL\nHorn is FAIL\nCabin Light is FAIL\nHead Light is FAIL\nADDITIONAL REMARKS:\nNone.', 'NONE', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'None.', 'Fit', 'Allow', 'None.'),
('0000-00-00 00:00:00', 'CKL', 'HAPPY1122', 'FAULTS DETECTED:\nHazchem Codes are FAIL\nDriver PPE is FAIL\nMask Respirator is FAIL\nSafety Cones With Reflective Tape are FAIL\nFirst Aid Box is FAIL\nSpill Kit is FAIL\nExplosives-proof Torch is FAIL\nSpare Tyre is FAIL\nFire Extinguisher is FAIL\nDRL is FAIL\nCabin Light is FAIL\nHead Light is FAIL\nBrake Light is FAIL\nFog Light is FAIL\nParking Light is FAIL\nIndicator Light is FAIL\nABS Light is FAIL\nHorn is FAIL\nCabin Light is FAIL\nHead Light is FAIL\nADDITIONAL REMARKS:\nNone.', 'NONE', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'None.', 'Fit', 'Allow', 'None.'),
('0000-00-00 00:00:00', 'SWL', 'ABC123', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'None.', 'Fit', 'Allow', 'None.'),
('0000-00-00 00:00:00', 'DHP', 'qqq', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'None.', 'Fit', 'Allow', 'None.'),
('0000-00-00 00:00:00', 'VHR', 'ABC123kkdks', 'FAULTS DETECTED:\nSpill Kit is Damaged\nExplosives-proof Torch is Damaged\nDRL is Dimming\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'YES', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'Allow', 'RTEngineer'),
('0000-00-00 00:00:00', 'SSH', 'ABC123kkdks', 'FAULTS DETECTED:\nFog Light is Dimming\nParking Light is Dimming\nIndicator Light is Dimming\nABS Light is Dimming\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'ActionStatusAllowWithWarning', 'RTEngineer'),
('0000-00-00 00:00:00', 'SSH', 'ABC123kkdks', 'FAULTS DETECTED:\nFog Light is Dimming\nParking Light is Dimming\nIndicator Light is Dimming\nABS Light is Dimming\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'ActionStatusAllowWithWarning', 'RTEngineer'),
('0000-00-00 00:00:00', 'VHR', 'qqq', 'FAULTS DETECTED:\nDriver PPE is Damaged\nMask Respirator is Damaged\nSafety Cones With Reflective Tape are Damaged\nFirst Aid Box is Damaged\nSpill Kit is Damaged\nExplosives-proof Torch is Damaged\nSpare Tyre is Damaged\nFire Extinguisher is Damaged\nFog Light is Damaged\nParking Light is Damaged\nIndicator Light is Damaged\nABS Light is Damaged\nHorn is Damaged\nCabin Light is Damaged\nHead Light is Damaged\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'YES', 'YES', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'Critical', 'RefuseLoading', 'OtDManager'),
('0000-00-00 00:00:00', 'SKP', 'qqq', 'FAULTS DETECTED:\nHorn is Weakening\nCabin Light is Weakening\nHead Light is Weakening\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Critical', 'RefuseLoading', 'OtDManager'),
('0000-00-00 00:00:00', 'MCH', 'XYZ1882', 'FAULTS DETECTED:\nHorn is Damaged\nCabin Light is Damaged\nHead Light is Damaged\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Critical', 'RefuseLoading', 'OtDManager'),
('0000-00-00 00:00:00', 'SWL', 'qqq', 'FAULTS DETECTED:\nHorn is Damaged\nCabin Light is Damaged\nHead Light is Damaged\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Critical', 'RefuseLoading', 'OtDManager'),
('0000-00-00 00:00:00', 'TJB', 'ABC123', 'FAULTS DETECTED:\nHorn is Damaged\nCabin Light is Damaged\nHead Light is Damaged\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Critical', 'RefuseLoading', 'OtDManager'),
('0000-00-00 00:00:00', 'SWL', 'qqq', 'FAULTS DETECTED:\nHorn is Damaged\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Critical', 'RefuseLoading', 'NONE'),
('0000-00-00 00:00:00', 'CKL', 'ABC123kkdks', 'FAULTS DETECTED:\nFitness Certificate not onboard.\nTyres are OK.\nComments: Futher comments (if any)...\nADDITIONAL REMARKS:\nNone.', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'Allow', 'RTEngineer'),
('0000-00-00 00:00:00', 'KMR', 'HJAAJJ1222', 'FAULTS DETECTED:\nTyres are OK.\nComments: Jaakkakks\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'Allow', 'NONE'),
('0000-00-00 00:00:00', 'SWL', 'XYZZZZZZZ', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'Allow', 'NONE'),
('0000-00-00 00:00:00', 'SSH', 'HAPPY1122', 'FAULTS DETECTED:\nTyre Depth is not OK.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'Allow', 'NONE'),
('0000-00-00 00:00:00', 'VHR', 'EXA123', 'FAULTS DETECTED:\nSpare Tyre is Damaged\nDRL is Dimming\nCabin Light is Dimming\nHead Light is Dimming\nBrake Light is Dimming\nFog Light is Damaged\nHorn is Weakening\nReverse Buzzer is Weakening\nID Key Buzzer is Weakening\nEarthing Cable is not OK.\nWiper is not OK.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'YES', 'YES', 'YES', 'YES', 'NONE', 'YES', 'NONE', 'Critical', 'RefuseLoading', 'OtDManager'),
('0000-00-00 00:00:00', 'SSH', 'ABC123', 'FAULTS DETECTED:\nHazchem Codes are Missing\nDriver PPE is Missing\nMask Respirator is Missing\nSafety Cones With Reflective Tape are Missing\nFirst Aid Box is Missing\nSpill Kit is Missing\nExplosives-proof Torch is Missing\nSpare Tyre is Missing\nFire Extinguisher is Missing\nTyre Depth is not OK.\nTyre Air Pressure is not OK.\nWires Visibility is not OK.\nDRL is Damaged\nCabin Light is Damaged\nHead Light is Damaged\nBrake Light is Damaged\nFog Light is Damaged\nParking Light is Damaged\nIndicator Light is Damaged\nABS Light is Damaged\nHorn is Damaged\nReverse Buzzer is Damaged\nID Key Buzzer is Damaged\nEarthing Cable is not OK.\nHose is not OK.\nAutomatic Slack Adjuster is not OK.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'NONE', 'Critical', 'RefuseLoading', 'OtDManager'),
('0000-00-00 00:00:00', 'MHK', 'TERMINATOR123', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Critical', 'RefuseLoading', 'RTEngineer\nHaulier\nOtDManager\n'),
('0000-00-00 00:00:00', 'SSH', 'ABC123kkdks', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'Allow', 'NONE'),
('0000-00-00 00:00:00', 'SSH', 'ABC123kkdks', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'Allow', 'NONE'),
('0000-00-00 00:00:00', 'SSH', 'TYYU', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'ActionStatusAllowWithWarning', 'NONE'),
('0000-00-00 00:00:00', 'MHK', 'HAPPY1122', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'Allow', 'NONE'),
('0000-00-00 00:00:00', 'CKL', 'ABC123kkdks', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'Allow', 'NONE'),
('0000-00-00 00:00:00', 'KMR', 'HJAAJJ1222', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'ActionStatusAllowWithWarning', 'NONE'),
('0000-00-00 00:00:00', 'DHP', 'ABC123', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'Allow', 'NONE'),
('0000-00-00 00:00:00', 'MHK', 'ABC123kkdks', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Critical', 'RefuseLoading', 'OtDManager\n'),
('0000-00-00 00:00:00', 'DHP', 'GHJ', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'Allow', 'NONE'),
('0000-00-00 00:00:00', 'MHK', 'XYZ1882', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'Allow', 'RTEngineer\n'),
('0000-00-00 00:00:00', 'MHK', 'ABC123kkdks', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'ActionStatusAllowWithWarning', 'RTEngineer\n'),
('0000-00-00 00:00:00', 'CKL', 'HAPPY1122', 'FAULTS DETECTED:\nDRL is Dimming\nCabin Light is Dimming\nHead Light is Dimming\nBrake Light is Dimming\nFog Light is Dimming\nParking Light is Dimming\nIndicator Light is Dimming\nABS Light is Dimming\nHorn is Weakening\nReverse Buzzer is Damaged\nID Key Buzzer is Damaged\nEarthing Cable is not OK.\nHose is not OK.\nSpray is not OK.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'YES', 'YES', 'NONE', 'YES', 'YES', 'YES', 'NONE', 'PreviousConcernsNotRectified', 'RefuseLoading', 'NONE'),
('0000-00-00 00:00:00', 'CKL', 'ABC123', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'Fit', 'ActionStatusAllowWithWarning', 'RTEngineer\nHaulier\nOtDManager\n'),
('0000-00-00 00:00:00', 'MHK', 'ABC123kkdks', 'FAULTS DETECTED:\nTerm Card not onboard.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', '1', 'Fit', 'ActionStatusAllowWithWarning', 'NONE'),
('0000-00-00 00:00:00', 'CKL', 'HAPPY1122', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', '1', 'Fit', 'Allow', 'RTEngineer\n'),
('0000-00-00 00:00:00', 'MHK', 'HAPPY1122', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', '1', 'Fit', 'ActionStatusAllowWithWarning', 'NONE'),
('0000-00-00 00:00:00', 'CKL', 'ABC123', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', '1', 'PreviousConcernsNotRectified', 'RefuseLoading', 'Haulier\n'),
('0000-00-00 00:00:00', 'MHK', 'ABC123kkdks', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', '1', 'Critical', 'RefuseLoading', 'RTEngineer\n'),
('0000-00-00 00:00:00', 'CKL', 'qqq', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', '1', 'Fit', 'RefuseLoading', 'OtDManager\n'),
('0000-00-00 00:00:00', 'CKL', 'ABC123kkdks', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', '1', 'Fit', 'ActionStatusAllowWithWarning', 'Haulier\n'),
('0000-00-00 00:00:00', 'CKL', 'ABC123', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', '1', 'Fit', 'ActionStatusAllowWithWarning', 'NONE'),
('0000-00-00 00:00:00', 'MHK', 'HAPPY1122', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', '8', 'Fit', 'Allow', 'RTEngineer\nHaulier\nOtDManager\n'),
('0000-00-00 00:00:00', 'VHR', 'HAPPY1122', 'FAULTS DETECTED:\nNone.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', '2', 'Fit', 'ActionStatusAllowWithWarning', 'RTEngineer\n'),
('0000-00-00 00:00:00', 'KMR', 'TLU324', 'FAULTS DETECTED:\nBrake Light is Damaged\nFog Light is Damaged\nParking Light is Dimming\nIndicator Light is Dimming\nABS Light is Dimming\nHorn is Weakening\nReverse Buzzer is Damaged\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'YES', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'PreviousConcernsNotRectified', 'Allow', 'RTEngineer\nHaulier\n'),
('0000-00-00 00:00:00', 'MHK', 'TLU324', 'FAULTS DETECTED:\nID Key Buzzer is Weakening\nWiring Insulation is not OK.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'YES', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'Critical', 'ActionStatusAllowWithWarning', 'RTEngineer\nHaulier\nOtDManager\n'),
('2022-08-14 05:27:45', 'QUETTA', 'TLU324', 'FAULTS DETECTED:\nID Key Buzzer is Weakening\nValves are not OK.\nManhole Cover is not OK.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'YES', 'NONE', 'YES', 'YES', 'NONE', 'NONE', 'DelayableConcerns', 'RefuseLoading', 'RTEngineer\n'),
('2022-08-14 05:55:27', 'SKP', 'TLU324', 'FAULTS DETECTED:\nHazchem Codes are Damaged\nDriver PPE is Damaged\nMask Respirator is Damaged\nSafety Cones With Reflective Tape are Damaged\nFirst Aid Box is Damaged\nSpill Kit is Damaged\nExplosives-proof Torch is Damaged\nSpare Tyre is Damaged\nFire Extinguisher is Damaged\nTyre Air Pressure is not OK.\nDRL is Dimming\nCabin Light is Dimming\nHead Light is Dimming\nBrake Light is Dimming\nFog Light is Dimming\nParking Light is Dimming\nIndicator Light is Dimming\nABS Light is Dimming\nHorn is Weakening\nReverse Buzzer is Weakening\nID Key Buzzer is Weakening\nValves are not OK.\nEarthing Cable is not OK.\nEarthing Strip is not OK.\nSideguard is not OK.\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'NONE', 'NONE', 'DelayableConcerns', 'ActionStatusAllowWithWarning', 'NONE'),
('2022-08-14 05:57:10', 'CKL', 'TLU324', 'FAULTS DETECTED:\nHorn is Weakening\nReverse Buzzer is Weakening\nID Key Buzzer is Weakening\nADDITIONAL REMARKS:\nNone.', 'NONE', 'NONE', 'NONE', 'NONE', 'YES', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'DelayableConcerns', 'AllowWithWarning', 'NONE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
