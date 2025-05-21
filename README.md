# :label: Bachelor's Project - Research on Web Application Vulnerabilities  

**Author**: Aleksandr Kross  
**Supervisor**: Ing. Jiri Sebek  
**Institution**: Faculty of Electrical Engineering, Czech Technical University in Prague  
**Department**: Department of Computer Science

![Python](https://img.shields.io/badge/Python-3776AB?style=for-the-badge&logo=python&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
![MySQL](https://img.shields.io/badge/MySQL-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)

## :label: Project Description
The OWASP Top 10 highlights critical security vulnerabilities in modern web applications, underscoring the need for robust defensive strategies in development. This project aims to explore these vulnerabilities, such as Injection, Cross-Site Scripting (XSS), and Security Misconfigurations, through extensive research and practical demonstrations. A deliberately vulnerable PHP-based web application will be developed to showcase how these weaknesses can be exploited. Additionally, a Python-based vulnerability detection tool will be created, capable of identifying these issues using both static and dynamic detection techniques. The ultimate goal is to enhance security awareness and promote best practices in web application development.

## :label: Project Goals
<details><summary> Show more </summary>
  
  1. **Research OWASP Top 10 Vulnerabilities:** Conduct an in-depth study of common web vulnerabilities like SQL Injection, XSS, and CSRF, focusing on their identification and mitigation.  
  2. **Develop a Vulnerable Web Application**: Build a PHP-based application with intentional security flaws to serve as a testing ground for vulnerability detection.  
  3. **Demonstrate Exploitation Techniques**: Showcase how the identified vulnerabilities can be exploited to emphasize the importance of secure coding practices.  
  4. **Build a Detection Tool**: Develop a Python application featuring both static and dynamic detectors to identify vulnerabilities in the web application.  
  5. **Evaluate Detection Accuracy**: Test the detection tool on the vulnerable application to validate its effectiveness and improve its performance.
     
</details>

## Application Structure  
<details><summary> Show more </summary>

  **vulnerability_detector/**
    - **config/**  It contains configuration files, including URLs and credentials for the application.
    - **core/** - The base detector defines all detectors' structure; the vulnerability manager manages and executes them. 
    - **detectors/** Houses both static and dynamic detectors for identifying various vulnerabilities.  
    - **input/** Contains PHP files for static detection.  
    - **logs/** Keeps application logs for debugging and auditing purposes.  
    - **report_generators/** It contains scripts to generate detailed reports for each type of vulnerability.  
    - **reports/** Saves the generated reports detailing detected vulnerabilities.  
    - **utils/** Provides shared utility functions to support different application components.  
    - **tests/** A placeholder directory for unit tests to validate the application's functionality.  
    - **main.py:** The entry point for running the application.  
    - **run_vulnerability_detector.py:** A wrapper script designed to launch the application from the console with a clean interface.  
    - **requirements.txt:** Lists all dependencies required to run the project.  
    - **setup.py:** The installation script for setting up the project environment.  

</details>

## :label: How to Run the Application

**1. Download the source code of the application from the repository:** <br>
`git clone https://github.com/mathewtroy/box.git`<br>

**2. Select app folder:** <br>
`cd vulnerability_detector`<br>

**3. Install dependencies:** <br>
`pip install -r requirements.txt`<br>

**4. Run the application:** <br>
`python run_vulnerability_detector.py`

**5. View reports:** <br>
Reports with detected vulnerabilities are generated in the `reports/` folder.

## :label: Features of the Application

<details><summary> Show more </summary>

- **Static Detection:** Includes detectors for cryptographic failures, injections, insecure designs, and more.
- **Dynamic Detection:** Simulates XSS attacks and verifies vulnerabilities dynamically.
- **Report Generation:** Automatically generates detailed, structured reports for each vulnerability type.
- **Object-Oriented Design:** The application leverages OOP for better modularity and maintainability.
- **Logging System:** Every detection step is logged for transparency and debugging.

</details>

## :label: Literature
1. Pandya, Deven, and N. J. Patel. "OWASP Top 10 vulnerability analyses in government websites." *International Journal of Enterprise Computing and Business Systems*, 2016.
2. Marchand-Melsom, Alexander, and Duong Bao Nguyen Mai. "Automatic repair of OWASP Top 10 security vulnerabilities: A survey." *IEEE/ACM 42nd International Conference on Software Engineering Workshops*, 2020.
3. Bach-Nutman, Matthew. "Understanding the top 10 OWASP vulnerabilities." *arXiv preprint arXiv:2012.09960*, 2020.
4. Patil, Sonali, et al. "A Review of the OWASP Top 10 Web Application Security Risks and Best Practices for Mitigating These Risks." *7th International Conference On Computing, Communication, Control And Automation (ICCUBEA)*, IEEE, 2023.

## :label: Contact  
:email: **[For questions, reach out here](mailto:krossale@fel.czut.cz)**
