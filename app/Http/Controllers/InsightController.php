<?php

namespace App\Http\Controllers;

class InsightController extends Controller
{
    public function index()
    {
        return view('insights');
    }

    protected function articles(): array
    {
        return [
            'mechanical' => [
                'hvac-importance' => [
                    'tag'   => 'Mechanical & HVAC',
                    'title' => 'What Is HVAC and Why Is It Important for Commercial Buildings?',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "Heating, Ventilation, and Air Conditioning (HVAC) systems play a critical role in modern commercial buildings. Whether it is an office building, hotel, shopping mall, hospital, restaurant, or retail store, HVAC systems help maintain indoor comfort, improve air quality, and support efficient building operations.

A properly designed and maintained HVAC system not only creates a comfortable environment for occupants but also contributes to energy efficiency, operational reliability, and long-term cost savings.

## What Is HVAC?
HVAC stands for Heating, Ventilation, and Air Conditioning. These systems work together to regulate temperature, humidity, airflow, and indoor air quality throughout a building.

**Heating** — Heating systems maintain comfortable indoor temperatures during cooler periods and support occupant comfort.

**Ventilation** — Ventilation systems provide fresh air circulation while removing stale air, odors, and airborne contaminants.

**Air Conditioning** — Air conditioning systems cool indoor spaces and help regulate humidity levels to improve comfort and productivity.

## Why Is HVAC Important for Commercial Buildings?

**1. Occupant Comfort** — A comfortable indoor environment improves employee productivity, customer satisfaction, and overall building experience.

**2. Indoor Air Quality** — Ventilation systems help improve indoor air quality by introducing fresh air and reducing pollutants, dust, and airborne contaminants. Particularly important for hospitals, healthcare facilities, hotels, restaurants, and office buildings.

**3. Energy Efficiency** — Modern HVAC systems optimize energy consumption while maintaining comfort, reducing electricity costs and improving equipment performance.

**4. Equipment Protection** — Temperature-sensitive equipment such as servers, electrical systems, and medical devices often require controlled environments.

**5. Regulatory Compliance** — Proper HVAC design helps meet safety, ventilation, and environmental requirements.

## Common HVAC Systems Used in Commercial Buildings
- VRF & VRV Systems
- Chilled Water Systems
- Split Air Conditioning Systems
- Ventilation Systems
- Ducting Systems

## Why HVAC Maintenance Is Important
Preventive maintenance improves efficiency, reduces breakdowns, lowers repair costs, extends equipment lifespan, and improves indoor air quality.

## Conclusion
HVAC systems are essential for maintaining comfort, air quality, energy efficiency, and operational reliability in commercial buildings.",
                ],
            ],

            'electrical' => [
                'systems-required' => [
                    'tag'   => 'Electrical',
                    'title' => 'What Electrical Systems Are Required for Commercial Buildings?',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "Electrical systems are one of the most critical components of any commercial building. A properly designed electrical system ensures safe, efficient, and reliable operations.

## 1. Power Distribution Systems
Power distribution systems distribute electricity from the utility source to equipment, lighting, and building systems. Typical components include Main Distribution Boards (MDB), Sub Distribution Boards (SDB), Switchgear, Circuit Breakers, Transformers, and Power Cabling.

## 2. Lighting Systems
Commercial buildings require interior lighting (office, retail, hotel, corridor, emergency) and exterior lighting (parking, facades, landscape, security).

## 3. Backup Power Systems
Diesel generators, automatic transfer switches (ATS), and uninterruptible power supplies (UPS) help maintain critical operations during electrical failures.

## 4. Low Voltage Systems
Structured cabling, telephone systems, internet networks, CCTV, access control, public address, and intercom systems improve security and communication.

## 5. Fire Alarm Integration
Electrical systems often integrate with fire detection, smoke detectors, emergency notification, and fire alarm control panels.

## 6. Grounding and Lightning Protection Systems
These protect people and equipment from electrical faults and lightning strikes — especially important for high-rise buildings, industrial facilities, and data centers.

## 7. Building Automation Systems
Building Management Systems (BMS) integrate HVAC, lighting, energy monitoring, security, and fire alarm systems.

## Conclusion
Electrical systems are essential for the safe and efficient operation of commercial buildings, from power distribution and lighting to backup power and automation.",
                ],
                'power-distribution' => [
                    'tag'   => 'Electrical',
                    'title' => 'Power Distribution & Backup Systems for Commercial Buildings',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "Power distribution systems distribute electricity from the utility source to equipment, lighting, and building systems. Backup power ensures critical operations continue during outages.

## Power Distribution
Main components include Main Distribution Boards (MDB), Sub Distribution Boards (SDB), switchgear, circuit breakers, transformers, and power cabling — forming the backbone of reliable building electricity.

## Backup Power
Diesel generators, ATS, and UPS units protect hospitals, hotels, data centers, and industrial facilities from disruption during power failures.

## Conclusion
Reliable distribution paired with backup power keeps critical building operations running, even during outages.",
                ],
                'low-voltage' => [
                    'tag'   => 'Electrical',
                    'title' => 'Low Voltage & Building Automation Systems',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "Low voltage systems support communication, security, and operational technologies including CCTV, access control, structured cabling, and building management systems.

## Examples of Low Voltage Systems
- Structured Cabling Systems
- Telephone Systems
- Internet Networks
- CCTV Systems
- Access Control Systems
- Public Address Systems
- Intercom Systems

## Building Automation
Modern commercial buildings use Building Management Systems (BMS) to integrate HVAC, lighting, energy monitoring, security, and fire alarm systems — improving operational efficiency.

## Conclusion
Low voltage and automation systems improve security, communication, and overall building management.",
                ],
            ],

            'plumbing' => [
                'fire-protection' => [
                    'tag'   => 'Plumbing & Fire',
                    'title' => 'What Fire Protection Systems Are Required for Commercial Buildings?',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "Fire safety is one of the most important considerations in commercial building design and operation. A properly designed fire protection system can detect fires early, alert occupants, support evacuation, and minimize property damage.

## Essential Fire Protection Systems
- **Fire Detection Systems** — identify smoke, heat, or fire conditions and trigger alarms.
- **Fire Alarm Systems** — provide audible and visual warnings.
- **Fire Sprinkler Systems** — automatically release water when heat is detected.
- **Fire Hose Systems** — provide emergency responders with immediate water access.
- **FM-200 Fire Suppression Systems** — use a clean agent, ideal for server rooms and data centers.
- **Fire Extinguishers** — first-response protection against small fires.

## Choosing the Right Solution
Required systems depend on building type, occupancy levels, equipment risks, local regulations, and insurance requirements.

## Conclusion
Investing in proper fire protection systems is essential for safety, compliance, and business continuity.",
                ],
                'fm200' => [
                    'tag'   => 'Plumbing & Fire',
                    'title' => 'FM-200 Fire Suppression Systems for Server Rooms & Data Centers',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "FM-200 systems use a clean agent to suppress fires without damaging sensitive equipment, making them ideal for server rooms, data centers, and control rooms.

## Why FM-200?
Unlike water-based suppression, FM-200 leaves no residue and doesn't harm electronic equipment — critical for protecting servers and control systems during a fire event.

## Best Suited For
- Server Rooms
- Data Centers
- Control Rooms
- Telecom Equipment Rooms

## Conclusion
FM-200 offers fast, equipment-safe fire suppression for mission-critical spaces.",
                ],
            ],

            'mep' => [
                'consultants-timing' => [
                    'tag'   => 'MEP Design',
                    'title' => 'When Should MEP Consultants Be Involved in a Project?',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "Many construction projects involve Mechanical, Electrical, and Plumbing (MEP) systems, yet MEP consultants are often brought in too late, resulting in design conflicts, increased costs, and delays.

## Stage 1: Project Planning
Assess requirements, estimate utility demands, evaluate system options, and support budgeting decisions.

## Stage 2: Concept Design
Collaborate with architects and structural engineers to allocate adequate space for building systems.

## Stage 3: Detailed Design
System layouts, calculations, specifications, and engineering documentation are developed.

## Stage 4: Construction Phase
MEP consultants review installations, resolve site issues, and ensure compliance.

## Stage 5: Testing & Commissioning
All systems are tested before occupancy to verify safety, performance, and compliance.

## Conclusion
MEP consultants should be involved as early as possible for better planning, performance, and project outcomes.",
                ],
            ],

            'facility' => [
                'maintenance-plan' => [
                    'tag'   => 'Facility',
                    'title' => 'Creating a Maintenance Plan for Commercial Buildings',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "A well-maintained building operates more efficiently, experiences fewer breakdowns, and provides a safer environment for occupants.

## Key Systems That Require Maintenance
- **Mechanical** — HVAC, AC units, ventilation, ducting
- **Electrical** — distribution boards, lighting, generators, low voltage systems
- **Plumbing** — water supply, drainage, boilers, water treatment
- **Fire Protection** — detection, sprinklers, hose systems, extinguishers, FM-200

## Recommended Maintenance Schedule
- **Monthly** — equipment inspections, filter cleaning, basic checks
- **Quarterly** — HVAC, electrical, and plumbing inspections
- **Semi-Annual** — fire system testing, generator maintenance
- **Annual** — comprehensive system assessment and planning review

## Conclusion
A proactive maintenance plan helps buildings operate more efficiently, safely, and cost-effectively.",
                ],
                'amc-benefits' => [
                    'tag'   => 'Facility',
                    'title' => 'Benefits of Annual Maintenance Contracts for Commercial Buildings',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "Many building owners choose Annual Maintenance Contracts (AMC) to ensure consistent maintenance throughout the year.

## Benefits of AMC
- Scheduled inspections
- Priority support
- Lower repair costs
- Improved equipment lifespan
- Reduced downtime

## How Daiku Supports Building Maintenance
Daiku provides preventive maintenance for HVAC, electrical, plumbing, and fire protection systems, plus Air Conditioning Annual Maintenance Service (AMS) for residential and commercial clients.

## Conclusion
An AMC keeps building systems running reliably while reducing unplanned costs.",
                ],
            ],
        ];
    }

    public function show($category, $slug)
    {
        $articles = $this->articles();

        abort_unless(isset($articles[$category][$slug]), 404);

        $article = $articles[$category][$slug];

        return view('insights.show', [
            'category' => $category,
            'article'  => $article,
        ]);
    }
}