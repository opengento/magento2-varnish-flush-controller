# Magento Varnish Flush Logger & Interceptor

**"Keep Guru in Meditation!"**

## Overview

Varnish has had enough! It's getting bombarded with FLUSH requests all day long. Yet, nobody notices or takes action to help it! It's time to save our "Guru" and let it continue its peaceful meditation.

## Purpose

This module aims to bring visibility to and control over Varnish FLUSH calls within your Magento store. By logging and monitoring these flushes, you can better understand what's happening behind the scenes and take appropriate action.

## Key Features

- **Log All FLUSH Calls:**  
  Track all FLUSH requests and view them in the Magento Admin Panel.

- **Group by Tags:**  
  Organize and group FLUSH calls based on Tags to understand their context better.

- **KPI Dashboards:**  
  Monitor key performance indicators related to FLUSH calls, helping you spot patterns and potential issues.

- **Contextual Information:**  
  Get detailed information about the call stack and context leading to each FLUSH request.

- **Flush Interception:**  
  Intercept FLUSH requests in real-time and optionally block or redirect them back to the sender. This feature is configurable to suit your needs.

- **Toolbar Integration:**  
  Easily view tags associated with the current page via a dedicated toolbar, allowing you to track tag usage in real-time.

## Why It Matters

With this module, you can protect your Magento store's Varnish instance from unnecessary FLUSH calls, improve performance, and maintain a better understanding of your cache's behavior.

## Installation

1. **Download the module:**

   You can download this module directly from the [GitHub repository](https://github.com/your-repository-link).

2. **Install via Composer:**

   ```bash
   composer require your-vendor/varnish-flush-logger
